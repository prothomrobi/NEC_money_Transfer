<?php
 if ($image) {
                $image_name = str_random(20);
                $ext = strtolower($image->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $upload_path = 'imgs/';
                $image_url = $upload_path . $image_full_name;
                if($ext == 'jpg' || $ext == 'png' || $ext == 'gif' || $ext == 'jpeg')
                {
                    if($file_size < 2097153)
                    {
                        $success = $image->move($upload_path, $image_full_name);
                    }
                    else{
                         \Session::flash('message', "Maxmium file size is 2MB !");
                        return redirect('admins_info');
                    }
                }
                else{
                     \Session::flash('message', "File Type not supported  !");
                     return redirect('admins_info');
                }
                if($success)
                {
                    
                    $id = $request->id;
                    $i = DB::table('users')
                                ->where('id',$id)
                                ->update(
                                    array(
                                        'username' =>$admin['username'],
                                        'password' =>$admin['password'],                        
                                        'type' => "Admin",
                                        
                                    )
                                );

                    
                    

                    

                    $j = DB::table('admin_details')
                            ->where('user_id',$id)
                            ->update( 
                                array(
                                    'fullname' => $admin['fullname'],
                                    'email' => $admin['email'],
                                    'phone' =>$admin['phone'],
                                    'address' => $admin['address'],
                                    'user_id' =>$admin['id'],
                                    'image' => $image_full_name,                            
                                )
                            );
                    if($i>0 && $j>0){
                        \Session::flash('message','Add successfull');
                        return redirect('admins_info');
                    }
                }
         }


?>