<?php 

include('includes/session.php');

include("model/banners.class.php");

$bannersObj=new bannersClass();

if($_POST['admininsert']=="Save")
{
	//echo "<pre>";
	//print_r($_POST);
	//echo "<pre>";exit;
   $bannersObj->insertbanners($_POST); 
}

if($_POST['admininsert']=="Update")
{

   $bannersObj->updatebanners($_POST);

}

if(isset($_GET['id']) && $_GET['id']!="")
{
//echo "syamsunder";exit;
   $hdn_value="Update";

   $indivdata=$bannersObj->getbannersData($_GET['id']); 
   //print_r($indivdata);
   $hdn_in_up='class="button button_save"';
}
else
{ 

  $hdn_value="Submit";

  $hdn_in_up='class="button button_add"';

}

if($_GET['action']=="delete")

{

   $bannersObj->bannersDelete($_GET['id']);

}

$start=0;$pageno=1;

if($_GET['start']!="")
{
	$start=$_GET['start'];
}

if($_GET['pagno']!="")
{
	$pageno=$_GET['pagno']+1;
}

if($_GET['pagnos']!="")
{
	$pageno=$_GET['pagnos']-1;
}


if($site_settings_disp->noofrecords!="0") 
{
	if($_GET['limit']!='') 
	{
		$limit=$_GET['limit'];
	} 
	else 
	{
		$limit=5;
	} 
}
else
{
	$limit=0;
}

if($_GET['fld']!="")

$fiild=$_GET['fld'];

else

$fiild="page_id";

if($_GET['ord']!="")

$ordby=$_GET['ord'];

else

$ordby="ASC";

$allpages=$bannersObj->getAllbannersList($fiild,$ordby,$start,$limit);
//print_r($allpages);

$total=$bannersObj->getAllbannersListCount();

?>

<?php if($option!="com_banners_insert"){ ?>
<div class="site_rgt">
           		<?php include('includes/adminheader.php');?>
                <div class="content_blg">
                	<div class="page_name_blg">
                    	<div class="page_name_lft">
                    		<h2>Dashbord</h2>
                        </div><!--page_name_lft-->
                        <div class="page_name_rgt">
                        	<a href="index.php?option=com_contentpages"><img src="images/settng_pic_14.png" alt=""></a>
                        </div><!--page_name_rgt-->
                    </div><!--page_name_blg-->
                    <div class="title_blg">
                    	<ul>
                        	<li><a href="index.php?option=com_dashboard"><img src="images/title_pics_19.png" alt=""></a></li>
                            <li><a href="index.php?option=com_dashboard">Home</a></li>
                            <li><a href="#"><img src="images/title_pics_22.png" alt=""></a></li>
                            <li><a href="index.php?option=com_banners">Banners</a></li>
                           
                        </ul>
                    </div><!--title_blg-->
                    <div class="clear_fix"></div>
                    <div class="customer-list">
                     <div class="heading_wrap">
                       <h4>Banners</h4> 
                       <!--<div class="searchbar_wrap">
                         <div class="sercin_top">
                            <input type="text" class="borderinpurt_right" placeholder="Search Banners name...">
                            <input type="submit" class="sericsubmit" value="">
                            <div class="clear_fix"></div>
                          </div><!--sercin_top
                           <div class="explore_wrap"><input type="submit" value="Export"></div>
                          <div class="clear_fix"></div>
                       </div>--><!--searchbar_wrap-->                   
                      <div class="clear_fix"></div>
                     </div>
                     <div class="clear_fix"></div>
                     
                     <?php
                       		$res=mysql_query("select * from tb_banners order by id");
							$totalrecords=mysql_num_rows($res);
					   ?>
                     <div class="paginationwrap">page 
                       <span style="position:relative; top:12px;"><a href="#"><img src="images/pagination-arrows_07.png" name="backward" onclick="return changepage(this.name)"></a></span>
                       <span style="position:relative; top:4px;"><input type="text" id="pageno" readonly="readonly" value="<?php echo $pageno;?>"></span>
                       <span style="position:relative; top:12px;"><a href="#"><img src="images/pagination-arrows_09.png" name="forward" onclick="return changepage(this.name)"></a></span> of <?php $i=1; if($total>$limit) { ?><?php echo ceil($total/$limit); ?> <?php $i++; } else { ?> 1 <?php } ?> | View
                       <span class="padding_wrap1">
                           <select name="data" id="datas" onchange="return showdata(this.value)">
                           <option value="5">5</option>
                           <option value="10">10</option>
                           <option value="15">15</option>
                           <option value="20">20</option>
                           <option value="30">30</option>
                           <option value="40">40</option>
                           <option value="50">50</option>
                           </select>
                           
                           <script type="text/javascript">
                            for(var i=0;i<document.getElementById('datas').length;i++)
                            {
                                if(document.getElementById('datas').options[i].value=="<?php echo $limit; ?>")
                                {
                                document.getElementById('datas').options[i].selected=true
                                }
                            }
							function changepage(name)
							{	
								var c=document.getElementById('pageno').value;
								//alert(name);
								if(name=='forward')
								{							
								start=c*<?php echo $limit;?>;												
								if(start<=<?php echo $totalrecords; ?>)
								{
								window.location.assign('index.php?option=com_banners&limit='+<?php echo $limit;?>+'&start='+start+'&pagno='+c);
								}}
								else
								{
								start=(c-2)*<?php echo $limit;?>;
								if(!(start<0))
								{
								//alert('sss');
								
								window.location.assign('index.php?option=com_banners&limit='+<?php echo $limit;?>+'&start='+start+'&pagnos='+c);	}
								}
							}			
                            </script>
                       </span>
					   <script>
					   function showdata(a) {
					   window.location.assign('index.php?option=com_banners&limit='+a);
					   }
					   </script>
                       
                       <span class="padding_wrap">records | Found total <?php echo $totalrecords; ?> records</span>
                       <span class="padding_wrap" style="float:right; margin-top:10px"><a href="index.php?option=com_banners_insert"><img src="images/add-btn_03.png" /></a></span>
                        <div class="clear_fix"></div>
                     </div><!--paginationwrap-->

                     <div class="table_wrap1">
                       <div class="tableheading1">
                         <div class="customerseno">Sno</div>
                         <div class="customerproname">Banner Names</div>
                         <div class="customerproimgs">Image</div>
                         <div class="customerprostatuss">Status</div>
                         <div class="customerproedit">Edit</div>
                         <div class="customerprodelete">Delete</div>
                         <div class="clear_fix"></div>
                       </div><!--tableheading-->
                       
                       <ul class="table_listing1">
					<?php
                    if(sizeof($allpages)>0){
                    $ii=0;
                    foreach($allpages as $all_pages)
                    {
                    ?>
                        <li>
                         <div class="customerseno1"><span>Sno</span><?php echo $ii+1;?></div>
                         <div class="customerproname1"><span>Banner Names</span><?php echo $all_pages->title;?></div>
                         <div class="customerproimg2"><span>Image</span><img src="../uploads/banners/thumbs/<?php echo $all_pages->image;?>"></div>
                         <div class="customerprostatus2"><span>Status</span><?php echo $all_pages->status;?></div>
                         <a class="customerproedit1" href="index.php?option=com_banners_insert&id=<?php echo $all_pages->id;?>"><span>Edit</span><img src="images/edit-delete_09.png"></a>
                         <div class="customerprodelete1" onClick="var q = confirm('Are you sure you want to delete selected record?'); if (q) { window.location = 'index.php?option=com_banners&action=delete&id=<?php echo $all_pages->id;?>'; return false;}"><span>Delete</span><img src="images/edit-delete_06.png" style="cursor: pointer;"></div>
                         <div class="clear_fix"></div>
                        </li>
					<?php $ii++;}}else{	?>
		
								<li>No Records..</li>
					<?php 
					}
					?>
                                               
                       </ul>
                    
                    </div><!--table_wrap-->
                    <div class="clear_fix"></div>
                    </div>
                    
                    
                </div><!--content_blg--> 
           </div>
<?php } else {?>
 <script type="text/javascript"  src="../ckeditor/ckeditor.js"></script>
<div class="site_rgt">
           		<?php include('includes/adminheader.php');?>
                <div class="content_blg">
                	<div class="page_name_blg">
                    	<div class="page_name_lft">
                    		<h2>Dashbord</h2>
                        </div><!--page_name_lft-->
                        <div class="page_name_rgt">
                        	<a href="#"><img src="images/settng_pic_14.png" alt=""></a>
                        </div><!--page_name_rgt-->
                    </div><!--page_name_blg-->
                    <div class="title_blg">
                    	<ul>
                        	<li><a href="index.php?option=com_dashboard"><img src="images/title_pics_19.png" alt=""></a></li>
                            <li><a href="index.php?option=com_dashboard">Home</a></li>
                            <li><a href="#"><img src="images/title_pics_22.png" alt=""></a></li>
                            <li><a href="index.php?option=com_banners"> Banners Management  </a></li>
                            <li><a href="#"><img src="images/title_pics_22.png" alt=""></a></li>
                            <li><a href="#"> Add/Edit Banners </a></li>
                        </ul>
                    </div><!--title_blg-->
                    <form action="index.php?option=com_banners_insert" method="post" id="frmCreateListing" name="frmCreateListing" class="middle_form" onSubmit="return validate();"  enctype="multipart/form-data">
                    <div class="add_product_blg">
                    
                    	<div class="add_product_blg_top">
                        	 <p>Add/Edit Banners</p>
                        </div><!--add_product_blg_top-->
                        
                       <div class="add_product_blg_btm">
                       	<div class="add_product_blg_btm_lft">
                        	<p>Title:</p>
                        </div><!--add_product_blg_btm_lft-->
                        <div class="add_product_blg_btm_rgt">
                        	<input type="text" name="title" value="<?php echo $indivdata->title;?>">
                        </div><!--add_product_blg_btm_rgt-->
                       </div><!--add_product_blg_btm-->
                       
                         
                       <!--add_product_blg_btm-->
                                              
                       <div class="add_product_blg_btm">
                       	<div class="add_product_blg_btm_lft">
                        	<p>Image :</p>
                        </div><!--add_product_blg_btm_lft-->
                        <div class="add_product_blg_btm_rgt">
                        	<input type="file" name="image">
                            
							<?php if($indivdata->image!=""){?>
                                <img src="../uploads/banners/<?php echo $indivdata->image; ?>" width="150" height="100"/>
                                <input type="hidden" name="hdn_image" size="24" value="<?php echo $indivdata->image; ?>" />
                            <?php } ?>
                            <br />
                        <span style="font-weight:500; font-size:12px; margin-top:10px;margin-left:-5px; color:#CC0033">(Size:1600x317)&nbsp;&nbsp;(Supported files:.jpeg,.png)</span>    
                        </div><!--add_product_blg_btm_rgt-->
                        
                       </div><!--add_product_blg_btm-->
                       
                       <div class="add_product_blg_btm">
                       	<div class="add_product_blg_btm_lft">
                        	<p>Statuts :</p>
                        </div><!--add_product_blg_btm_lft-->
                         <div class="add_product_blg_btm_rgt">
                        	<select name="status" id="status">
                            	<option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
							
							<script type="text/javascript">
                            for(var i=0;i<document.getElementById('status').length;i++)
                            {
                                if(document.getElementById('status').options[i].value=="<?php echo $indivdata->status; ?>")
                                {
                                document.getElementById('status').options[i].selected=true
                                }
                            }			
                            </script>

                        </div><!--add_product_blg_btm_rgt-->
                       </div><!--add_product_blg_btm-->
                       <div class="add_product_blg_btm">
                           <input name="hdn_page_id" type="hidden" value="<?php echo $indivdata->id?>">
                           <?php if($indivdata->id!=''){?>
                           <input type="submit" name="admininsert" value="Update" style="cursor:pointer">
                           <?php }else{?>
                           <input type="submit" name="admininsert" value="Save" style="cursor:pointer">
						   <?php }?>
                       </div><!--add_product_blg_btm-->
                    </div><!--add_product_blg-->
                </form>    
                </div><!--content_blg--> 
           </div>
<?php }?>