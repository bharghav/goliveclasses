<?php 

include('includes/session.php');

include("model/testmonials.class.php");

$faqObj=new testmonialsClass();

if($_POST['admininsert']=="Save")
{
	//echo "<pre>";
	//print_r($_POST);
	//echo "<pre>";exit;
   $faqObj->insertTestmonial($_POST); 
}

if($_POST['admininsert']=="Update")
{

   $faqObj->updateTestmonial($_POST);

}

if(isset($_GET['id']) && $_GET['id']!="")
{
//echo "syamsunder";exit;
   $hdn_value="Update";

   $indivdata=$faqObj->getfaqData($_GET['id']); 
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
//print_r($_GET['id']); exit;
   $faqObj->TestmonialDelete($_GET['id']);

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

$fiild="id";

if($_GET['ord']!="")

$ordby=$_GET['ord'];

else

$ordby="ASC";

$allpages=$faqObj->getAllTestmonialList($fiild,$ordby,$start,$limit);
//print_r($allpages);

 $total=$faqObj->getAllTestmonialListCount();

?>

<?php if($option!="com_testmonials_insert"){ ?>
<div class="site_rgt">
           		<?php include('includes/adminheader.php');?>
                <div class="content_blg">
                	<div class="page_name_blg">
                    	<div class="page_name_lft">
                    		<h2>Dashboard</h2>
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
                            <li><a href="index.php?option=com_testmonials">Testmonial's Management</a></li>
                            <li><a href="#"><img src="images/title_pics_22.png" alt=""></a></li>
                            <li><a href="#">Testmonials</a></li>
                        </ul>
                    </div><!--title_blg-->
                    <div class="clear_fix"></div>
                    <div class="customer-list">
                     <div class="heading_wrap">
                       <h4>Faqs </h4> 
                       <!--<div class="searchbar_wrap">
                         <div class="sercin_top">
                           <form name="searchproducts" method="post">
                            <input type="text" class="borderinpurt_right" name="search" placeholder="Search product name..." value="<?php echo $_POST['search']; ?>">
							<input type="image" src="images/search-icon_03.png" class="sericsubmit" />
							<input type="hidden" name="coupounsearch" value="Submit" />
                           
                            </form>
                            <div class="clear_fix"></div>
                          </div><!--sercin_top
                           <div class="explore_wrap"><input type="submit" value="Export"></div>
                          <div class="clear_fix"></div>
                       </div>--><!--searchbar_wrap-->                   
                      <div class="clear_fix"></div>
                     </div>
                     <div class="clear_fix"></div>
                     <?php
                       		$res=mysql_query("select * from tb_faq order by id");
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
								window.location.assign('index.php?option=com_testmonials&limit='+<?php echo $limit;?>+'&start='+start+'&pagno='+c);
								}}
								else
								{
								start=(c-2)*<?php echo $limit;?>;
								if(!(start<0))
								{
								//alert('sss');
								
								window.location.assign('index.php?option=com_testmonials&limit='+<?php echo $limit;?>+'&start='+start+'&pagnos='+c);	}
								}
							}			
                            </script>
                       </span>
					   <script>
					   function showdata(a) {
					   window.location.assign('index.php?option=com_testmonials&limit='+a);
					   }
					   </script>
                       
                       
                       <span class="padding_wrap">records | Found total <?php echo $totalrecords; ?> records</span>
                       <span class="padding_wrap" style="float:right; margin-top:10px"><a href="index.php?option=com_testmonials_insert"><img src="images/add-btn_03.png" /></a></span>
                        <div class="clear_fix"></div>
                     </div><!--paginationwrap-->

                     <div class="table_wrap1">
                       <div class="tableheading1">
                         <div class="customerseno">Sno</div>
                         <div class="customerproname">Quote</div>
                        
                         <div class="customerprodiscs">Testmonial</div>
                         <div class="customerprostatus">Status</div>
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
                         <div class="customerproname1"><span>Title</span><?php echo $all_pages->title;?> </div>
                         <div class="customerprodisc2"><span>Description</span><?php echo substr($all_pages->bigtext,0,120);?><?php if($all_pages->answer!='') { ?>....<?php } ?></div>
                         <div class="customerprostatus1"><span>Status</span><?php echo $all_pages->status;?></div>
                         <div class="customerproedit1"><a href="index.php?option=com_testmonials_insert&id=<?php echo $all_pages->id;?>"><span>Edit</span><img src="images/edit-delete_09.png"></a></div>
                         <div class="customerprodelete1" onClick="var q = confirm('Are you sure you want to delete selected record?'); if (q) { window.location = 'index.php?option=com_testmonials&action=delete&id=<?php echo $all_pages->id;?>'; return false;}"><span>Delete</span><img src="images/edit-delete_06.png" style="cursor: pointer;"></div>
                         <div class="clear_fix"></div>
                        </li>
			<?php $ii++;}}else{	?>
                        <li>
                            <div style="  float:left; height:50px; width:100%;text-align:center; padding-top:20px;"><span >No FAQ's available..</span></div>
                         <div class="clear_fix"></div>
                        </li><?php 
					}
					?>
                                               
                       </ul>
                    
                    </div><!--table_wrap-->
                    <div class="clear_fix"></div>
                    </div>
                    
                    
                </div><!--content_blg--> 
           </div>
<?php } else {?>
 <script type="text/javascript"  src="ckeditor/ckeditor.js"></script>
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
                            <li><a href="index.php?option=com_testmonials">Testmonail's Management</a></li>
                            <li><a href="#"><img src="images/title_pics_22.png" alt=""></a></li>
                            <li><a href="#">Testimonails</a></li>
                        </ul>
                    </div><!--title_blg-->
                    <form action="index.php?option=com_testmonials_insert" method="post" id="frmCreateListing" name="frmCreateListing" class="middle_form" onSubmit="return validate();"  enctype="multipart/form-data">
                    <div class="add_product_blg">
                    
                    	<div class="add_product_blg_top">
                        	 <p>Add/Edit Pages</p>
                        </div><!--add_product_blg_top-->
                        
                       <div class="add_product_blg_btm">
                       	<div class="add_product_blg_btm_lft">
                        	<p>Quote:</p>
                        </div><!--add_product_blg_btm_lft-->
                        <div class="add_product_blg_btm_rgt">
                        	<input type="text" name="quote" value="<?php echo $indivdata->title;?>">
                        </div><!--add_product_blg_btm_rgt-->
                       </div><!--add_product_blg_btm-->
                       
                    
                       
                        <div class="add_product_blg_btm">
                       	<div class="add_product_blg_btm_lft">
                        	<p>Testmonial :</p>
                        </div><!--add_product_blg_btm_lft-->
                        <div class="add_product_blg_btm_rgt">
                        <textarea  name="testmonial" id="testmonial" class="ckeditor"><?php echo $indivdata->bigtext; ?></textarea>
                        </div><!--add_product_blg_btm_rgt-->
                       </div><!--add_product_blg_btm-->
					   
					 
                       
                       <div class="add_product_blg_btm">
                       	<div class="add_product_blg_btm_lft">
                        	<p>Status :</p>
                        </div><!--add_product_blg_btm_lft-->
                         <div class="add_product_blg_btm_rgt">
                        	<select name="status" id="status">
                            	<option>Active</option>
                                <option>Inactive</option>
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
                           <input type="submit" name="admininsert" value="Update">
                           <?php }else{?>
                           <input type="submit" name="admininsert" value="Save">
						   <?php }?>
                       </div><!--add_product_blg_btm-->
                    </div><!--add_product_blg-->
                </form>    
                </div><!--content_blg--> 
           </div>
<?php }?>