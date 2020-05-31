<?php 
function conectar(){

	global $con;
		$ret = false;

			//$con = new mysqli("localhost","root","","clase1905");
				$con = mysqli_connect("localhost","root","");
					
						if ($con != false) {
								mysqli_select_db($con,"clase1905");
										$ret=true;
											}
												return $ret; 
												}

												function desconectar(){
													global $con;
														mysqli_close($con);

														}


														 ?>
