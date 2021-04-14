
  
  
    <style>


.contact_area{

             background-color: #f1f1f1;
 
          }


.team-section{
               overflow: hidden;
              
               background-color: #f1f1f1;
               padding: 20px;
               
                  }

   .border{
         display: block;
         margin: auto;
         width: 900px;
         height: 5px;
         background: #3498db;
         margin-bottom: 20px;
           }


   .section{
               width: 900px;
               margin: auto;
               font-size:20px;
               color: black;
               text-align: justify;
               margin-bottom: 35px;
           }

   .section:target {
                     height: auto;	
                  }




                  body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
    border: none;
    margin-bottom: 30px
}

.m-r-0 {
    margin-right: 0px
}

.m-l-0 {
    margin-left: 0px
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px
}

.bg-c-lite-green {
    background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263)
}

.user-profile {
    padding: 20px 0
}

.card-block {
    padding: 1.25rem
}

.m-b-25 {
    margin-bottom: 25px
}

.img-radius {
    border-radius: 5px
}

h6 {
    font-size: 14px
}

.card .card-block p {
    line-height: 25px
}

@media only screen and (min-width: 1400px) {
    p {
        font-size: 14px
    }
}

.card-block {
    padding: 1.25rem
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.m-b-20 {
    margin-bottom: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.card .card-block p {
    line-height: 25px
}

.m-b-10 {
    margin-bottom: 10px
}

.text-muted {
    color: #919aa3 !important
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0
}

.f-w-600 {
    font-weight: 600
}

.m-b-20 {
    margin-bottom: 20px
}

.m-t-40 {
    margin-top: 20px
}

.p-b-5 {
    padding-bottom: 5px !important
}

.m-b-10 {
    margin-bottom: 10px
}

.m-t-40 {
    margin-top: 20px
}

.user-card-full .social-link li {
    display: inline-block
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out
}


   

</style>



<section id="contentSection">

<br />
<div class="team-section">

<div class="col-lg-12 col-md-10 col-sm-8">
  
     <div class="contact_area">
       <h2>User Control </h2>

       <h4 style="text-align:center;">User Details</h4>  <hr />


       <br />

     

       <?php


            $id  = $_GET['id'];  

            $rqur = $this->db->query("SELECT * FROM user_infos WHERE user_id=$id" );
            $res = $rqur->result_array();

            $this->db->select('*');
            $this->db->from('user_infos');

        
         foreach ($res as $row ) 
        {?>

              
            <div class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
                        <div class="col-xl-6 col-md-12">
                            <div class="card user-card-full">
                                <div class="row m-l-0 m-r-0">
                                    <div class="col-sm-4 bg-c-lite-green user-profile">
                                        <div class="card-block text-center text-white">
                                            <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                          
                                            <h4 class="f-w-600"><b> <?=$row['user_id'] ?> </b> </h4>
                                            <h6 class="f-w-600"><b> <?=$row['name'] ?> </b> ( <?=$row['gender'] ?> )   </h6>
                                            <p><b> <?=$row['uname'] ?> </b></p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                        </div>
                                        
                                        <button type="button" class="btn btn-success"> Send Message </button>

                                    </div>

                                  

                                    <div class="col-sm-8">
                                        <div class="card-block">
                                            <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>

                                           
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Email</p>
                                                    <h6 class="text-muted f-w-400"><?=$row['email'] ?> </h6>
                                                </div>
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Phone</p>
                                                    <h6 class="text-muted f-w-400"><?=$row['phone'] ?></h6>
                                                </div>

                                               
                                                
                                            </div>

                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Address</p>
                                                    <h6 class="text-muted f-w-400"> <?=$row['address'] ?></h6>
                                                </div>

                                                <div class="col-sm-6">
                                                 <button type="button" class="btn btn-danger">Delete The User Account</button>
                                                </div>

                                               
                                              
                                            </div>

                                            <hr />

                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">Registration Date</p>
                                                    <h6 class="text-muted f-w-400"> <?=$row['udate'] ?> </h6>
                                                </div>

                                                <div class="col-sm-6">
                                                    <p class="m-b-10 f-w-600">User Status</p>
                                                    <h6 class="text-muted f-w-400"> <?=$row['u_status'] ?>  </h6>

                                                    <button type="button" class="btn btn-info">Change Status</button>
                                                </div>
                                              
                                            </div>


                                          
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php

            }

    ?>



     </div>

  </div>

</div>

<br/>

 
</section>

