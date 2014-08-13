<!-- BEGIN: main -->
{FILE "header.tpl"}


     <!--jumbotron-->
                    <div class="jumbotron top-margin-low">
					
						[CTHEAD]
                       
                    </div>
<!--End jumbotron-->

       <div class="container" >
        <!--Blog Start-->  
            <div class="row "> 
                 <!--Categories and other -->            
                 <div class="col-md-4 top-margin">
				 
                     [CTCAT1]
					
					
                     [CTCAT2]
					 
                     [CTCAT3]
					
                 </div>
                 <!--End Categories and other --> 
                 <!--Blog Listing--> 
                <div class="col-md-8 top-margin" >
					{MODULE_CONTENT}


					
                </div>
                <!--Blog Listing--> 
                
            </div>
           <!--Blog end-->  

           
        </div>
    <!-- /.container -->
	

{FILE "footer.tpl"}
<!-- END: main -->