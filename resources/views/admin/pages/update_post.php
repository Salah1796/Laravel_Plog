 <head>
    <?php

    $id=$_GET['up_p_id'];
    $q="select * from post where post_id ='$id'";
    $row=$Pdo_con->read_row($q,array());
    $title=$row['post_title'];
    $cat_id=$row['post_cat_id'];
    $author_id=$row['post_author_id'];
    $sql2="select username from users where user_id='$author_id' ";
    $author = $Pdo_con->read_row($sql2,array())['username'];
    $image=$row['post_image'];
    $content=$row['post_content'];
    $tages=$row['post_tages'];
    $status=$row['post_status'];

    ?>
<?php 
if(isset($_POST['Update']))
{

$post_title_error=$post_cat_id_error=$post_author_error=$post_content_error=$File_error ="";
$errors=array();
if (empty($_POST["post_title"]))
 {
    $post_title_error = "post title is required";
    $errors['post_title_error']="post title is required";
  } 
  else
   {
    $post_title=$_POST['post_title'];
  }


  if (!isset($_POST['cats']))
{
 $post_cat_id_error = "post category   is required";
 $errors['post_cat_id_error']="post category  is required";
} 
 else
   {
   // $post_cat_id_error=$_POST['cats'];
    $post_cat_id=$_POST['cats'];
   
  }

  if (empty($_POST['post_author']))
   {
    $post_author_error = "post author is required";
    $errors['post_author_error']="post author  Id  is required";

  } 
  else
   {
   $post_author=$_POST['post_author'];
  }

  if (empty($_POST['post-content']))
   {
    $post_content_error = "post content is required";
    $errors['post_content_error']="post content is required";

  } 
  else
   {
    $post_content=$_POST['post-content'];
  }

$post_status=$_POST['post_status'];
$post_tages=$_POST['post_tages'];

$post_date=date("Y-m-d");



//if ($_FILES['post_image']['error'] > 0) 

//$File_error.= 'Sorry, there was an error in uploading the file';
//if(!isset($_FILES['post_image']))
    //$post_image=$_POST['post_title'].'png';
 
//if ($_FILES['post_image']['type'] != 'image/png' ) 

    //$File_error .= 'Only .png files are allowed';

//if ($_FILES['post_image']['size'] >  51200) 

    //$File_error .= 'Files size should be less than 50KB';

    

if ($File_error =="" && count($errors)==0) 
    {
  //  echo "<script>alert('form ok')</script>";
$id=$_GET['up_p_id'];
       
        $post_image=$id.".png"; //from user
        $post_image_path_in_server="..//imgs/Post_imgs/".$id.".png";
//$post_image_name_in_server=$_POST['post_title'].".png";
        move_uploaded_file($_FILES['post_image']['tmp_name'],$post_image_path_in_server);
           $post_com_counter=0;

  
        update_post($post_cat_id,$post_title,
            $post_author,$post_date,$post_image,$post_content,$post_tages,$post_com_counter,$post_status,$id);
     //header("location:Admin_posts.php");
        echo "<script>alert('updated Sucsesfulyyy')</script>";
    }
   // else
      //  echo "<script>alert('There are erors or missing information')</script>";


}
?>




<!--     form to input post from user     -->
<div class="col-xs-12" style="height: auto; margin-top: 10px; 
">

<h2 align="center" style="margin-bottom: 20px; font-family: cursive;">Update Post</h2>
 <form action="" method="POST"  enctype="multipart/form-data" >
 

            <div class="form-group">

            <label for="post_title">Post Title</label>
            <input type="text" class="form-control" name="post_title" value=<?php echo $title;?> >
            <span class="error">* <?php  if(isset($post_title_error))echo $post_title_error;?></span>
        </div>
        <div class="form-group">
            <label for="cats">Post Category </label>
            <select  name="cats" >
           
            
                 <?php 
                $sql="select * from cats ";
             $res=$Pdo_con->read_rows($sql,array());
            
  foreach($res as $record) {              
               echo '<option value='.$record['cat_id'].'>'.$record["cat_title"].'</option>';
            }
                
                ?>  
            </select>
               
        
           
            <span class="error">* <?php  if(isset($post_cat_id_error))echo $post_cat_id_error;?></span>
        </div>
        <div class="form-group">
            <label for="post_author">Post Author</label>
            <input type="text" class="form-control" name="post_author" value=<?php echo $author;?> >
            <span class="error">* <?php  if(isset($post_author_error))echo $post_author_error;?></span>
</div>
<div class="form-group">
            <label for="post_status">Post Status</label>
            <input type="text" class="form-control" name="post_status" value=<?php echo $status;?> >
</div>
<div class="form-group">
    <?php    echo '<img width=15%; height=10%; src=../imgs/Post_imgs/'.$image.'><br>';?>
            <label for="post_image">Post Image</label>
            <input type="file" class="form-control" name="post_image" value="a.png">
</div>
<div class="form-group">
            <label for="post_tages">Post Tages</label>
            <input type="text" class="form-control" name="post_tages"  value=<?php echo $tages;?> >
</div>
<div class="form-group">
            <label for="post-content">Post Content</label>
            <textarea style="max-width: 100%; height: 300px;" class="form-control" name="post-content"><?php echo $content;?> </textarea>
            <span class="error">* <?php  if(isset($post_content_error))echo $post_content_error;?></span>
</div>
<div class="form-group">
<input type="submit" name="Update" value="Update Post" class="btn btn-primary" style="width: 90% ;margin-left: 5%; height: 40px;">
            
</div>
            
            




            </form>
        </div>

        
  

          


                       

