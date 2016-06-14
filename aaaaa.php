<?
include('connect.php');

$a = "INSERT INTO customer (cus_fname,cus_lname,cus_date,cus_address,cus_citizen,cus_gender,cus_rental_agreement,cus_username,cus_password,cus_email) VALUES(																																	   'werakan',
                                                                                                                                                    'ketjan'
                                                                                                                                                    ,'2016-03-20 10:10:00',
                                                                                                                                                    '121/1251',
                                                                                                                                                    '1234567890112',
                                                                                                                                                    '1',
                                                                                                                                                    'ffgfg',
                                                                                                                                                    'werakan',
                                                                                                                                                    'ketjan',
                                                                                                                                                    'werakan@Outlook.com2')";
																																					
	mysql_query($a);																																				
																																					


?>