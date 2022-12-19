<?php include('header.php');
	$qry2=mysqli_query($con,"select * from tbl_movie where movie_id='".$_GET['id']."'");
	$movie=mysqli_fetch_array($qry2);
	?>
<div class="content">
	<div class="wrap">
		<div class="content-top">
				<div class="section group">
					<div class="about span_1_of_2">	
						<h3 style="color:#444; font-size:23px;" class="text-center"><?php echo $movie['movie_name']; ?></h3>	
							<div class="about-top">	
								<div class="grid images_3_of_2">
									<img src="<?php echo $movie['image']; ?>" alt=""/>
								</div>
								<div class="desc span_3_of_2">
									<p class="p-link" style="font-size:15px"><b>Cast : </b><?php echo $movie['cast']; ?></p>
									<p class="p-link" style="font-size:15px"><b>Release Date : </b><?php echo date('d-M-Y',strtotime($movie['release_date'])); ?></p>
									<p style="font-size:15px"><?php echo $movie['desc']; ?></p>
									<a href="<?php echo $movie['video_url']; ?>" target="_blank" class="watch_but" style="text-decoration:none;">Watch Trailer</a>
								</div>
								<div class="clear"></div>
							</div>
							<?php $s=mysqli_query($con,"select DISTINCT theatre_id from tbl_shows where movie_id='".$movie['movie_id']."'");
							if(mysqli_num_rows($s))
							{?>
							<table class="table table-hover table-bordered text-center">
								<h3 style="color:#444;" class="text-center">Available Shows</h3>

								<thead>
										<tr>
											<th class="text-center" style="font-size:16px;"><b>Theatre</b></th>
											<th class="text-center" style="font-size:16px;"><b>Show Timings</b></th>
										</tr>
									</thead>
							<?php

							
								
								while($shw=mysqli_fetch_array($s))
								{
									
									$t=mysqli_query($con,"select * from tbl_theatre where id='".$shw['theatre_id']."'");
									$theatre=mysqli_fetch_array($t);
									?>
									

									<tbody>
									<tr>
										<td >
											<?php echo $theatre['name'].", ".$theatre['place'];?>
										</td>
										<td>
											<?php $tr=mysqli_query($con,"select * from tbl_shows where movie_id='".$movie['movie_id']."' and theatre_id='".$shw['theatre_id']."'");
											while($shh=mysqli_fetch_array($tr))
											{
												$ttm=mysqli_query($con,"select  * from tbl_show_time where st_id='".$shh['st_id']."'");
												$ttme=mysqli_fetch_array($ttm);
												
												?>
												
												<a href="check_login.php?show=<?php echo $shh['s_id'];?>&movie=<?php echo $shh['movie_id'];?>&theatre=<?php echo $shw['theatre_id'];?>"><button class="btn btn-default"><?php echo date('h:i A',strtotime($ttme['start_time']));?></button></a>
												<?php
											}
											?>
										</td>
									</tr>
									</tbody>
									<?php
								}
							?>
						</table>
							<?php
							}
						
							else
							{
								?>
								<h3 style="color:#444; font-size:23px;" class="text-center">Currently there are no any shows available!</h3>
								<p class="text-center">Please check back later!</p>
								<?php
							}
							?>
						
					</div>			
				<?php include('movie_sidebar.php');?>
			</div>
				<div class="clear"></div>		
			</div>
	</div>
</div>
<?php include('footer.php');?>