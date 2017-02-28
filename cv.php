<?php include('header.php') ?>
 <div class="container">
 <div class="row">
   
 
     <?php require_once('array.php');

     $data = new analysis();
     $helper= new helper();
     //var_dump($data->getEmployerData()));
     ?>
 <div class="page-header">
   <h3>CV<small>freelancer cv</small></h3>
 </div>
     <table class="table table-bordered table-hoverr">
         <thead>
             <tr>
                <th>Id</th>
                 <th>Job Title</th>
                 <th>Job Description</th>
                 <th>Job Category</th>
                 <th>Job Sub Category</th>
                 <th>Skill</th>
             </tr>
         </thead>
         <tbody>
         <?php foreach ($data->getFreelancerData() as $key => $value) {
             # code...
        ?>
             <tr>
                <td><?php echo $value['id'] ?></td>
                 <td><?php echo $value['resume_title'];  ?></td>
                 <td><?php echo $value['resume_description'];  ?></td>
                <td><?php echo $helper->getjobCategoryName($value['job_category_id']) ?></td>
                 <td><?php echo $helper->getjobSubCategoryName($value['job_sub_category_id']) ?></td>
                 <td><?php echo implode(',', $helper->getSkillName($value['skill_id']));?></td>

             </tr>
             <?php } ?>
         </tbody>
     </table>

 </div>
</div>

<?php include('footer.php') ;?>