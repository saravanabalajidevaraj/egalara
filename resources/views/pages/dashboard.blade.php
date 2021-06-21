@extends('layouts.main') 
@section('title', 'Dashboard')
@section('content')
    


    
 
<section id="page-content">
    <div class="body-content animated fadeIn">

                <div class="row">
         
            <div class="col-sm-12">
<style type="text/css">
   
#account-area {
    margin-top: 2%;
     margin-bottom: 20px;
}

/*.deposit {
       background-color: #03a9f4;
}

.withdraw {
        background-color: #03a9f4;
}

.balance {
        background-color: #03a9f4;
}*/


.c1 {
       background-color: #c5e3eb;
}

.c2 {
        background-color: #fce2e3;
}

.c3 {
        background-color: #dbecd9;
}
.c4 {
        background-color: #feedd9;
}

.c5 {
        background-color: #e2edc2;
}

.c6 {
        background-color: #f5e2ab;
}

.c7 {
        background-color: #f9d7e7;
}

.c8 {
        background-color: #f4e2ce;
}

.c9 {
        background-color: #eef4db;
}

.status {
    margin: 0 10px;
    color: white;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 3px 1px 2px 1px #d4d4d4;
    min-height: 190px;

}

#account-area h5{
    font-weight: bolder;
    font-size: 22px;
    color: #333333;
    font-family: 'Montserrat';

}
#account-area h2{
   margin-top: 8px;
   color: #000;
    font-family: 'Poppins';
}
#account-area p{
   margin-top: 10px;
   color: #000;
    font-family: 'Poppins';
}
#account-area .fa {
    font-size: 46px;
     color: gray;
     float: right;
}

</style>
                <div >
                    
                     <div id="account-area">
        
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="deposit status c1">
                        <i class="fa fa-university"></i>
                        <h5>Organization</h5>
                        <h2><span id="current-deposit">20</span></h2>
                        <p>Security Guard Company</p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="withdraw status c2">
                        <i class=" fa fa-users"></i>
                        <h5>Employee Management</h5>
                         <h2><span id="current-deposit">120</span></h2>
                       <!-- <h2>$ <span id="current-withdraw">00</span></h2> -->
                         <p>Increased by 16%</p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="balance status c3">
                        <i class="fa fa-exchange"></i>
                        <h5>Site Management</h5>
                        <h2><span id="current-balance">100</span></h2>
                         <p>Increased by 16%</p>
                    </div>
                 </div>

                

             

            
        </div>
<br>
         <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="deposit status c4">
                        <i class="fa fa-bar-chart"></i>
                        <h5>Deployment Chart</h5>
                        <h2><span id="current-deposit">40</span></h2>
                        <p>More Charts</p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="withdraw status c5">
                        <i class="fa fa-file-o"></i>
                        <h5>Reports</h5>
                       <h2><span id="current-withdraw">20</span></h2>
                         <p>Increased by 16%</p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="balance status c6">
                        <i class="fa fa-cog"></i>
                        <h5>Operations</h5>
                        <h2><span id="current-balance">40</span></h2>
                         <p>Increased by 16%</p>
                    </div>
                 </div>

                

             

            
        </div>
       <br>
         <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="deposit status c7">
                        <i class="fa fa-refresh"></i>
                        <h5>HR Bay</h5>
                        <h2><span id="current-deposit">00</span></h2>
                        <p>Increased by 16%</p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="withdraw status c8">
                        <i class=" fa fa-users"></i>
                        <h5>User Management</h5>
                       <h2><span id="current-withdraw">100</span></h2>
                         <p>Increased by 16%</p>
                    </div>
                </div>
                
                <div class="col-lg-4 mb-3">
                    <div class="balance status c9">
                        <i class="fa fa-exchange"></i>
                        <h5>Course Management</h5>
                        <h2><span id="current-balance">1240</span></h2>
                         <p>Assured that our knowledge</p>
                    </div>
                 </div>

                

             

            
        </div>

    </div>
                </div>
              </div>
          </div>
    </div>
</section>

 
	
@endsection