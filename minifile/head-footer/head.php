<div class="row justify-content-between">
    <div class="col-md-8 order-md-last">
        <div class="row">
            <div class="col-md-6 text-center">
                <a class="navbar-brand" href="index.php">Gia<span>Pha</span></a>
            </div>
            <div class="col-md-6 d-md-flex justify-content-end mb-md-0 mb-3">
                <form class="searchform order-lg-last" id="search_form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control pl-3" name="s" placeholder="Search">
                        <button  type="button" id="btnSearch" placeholder="" class="form-control search"><span
                                class="fa fa-search"></span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-4 d-flex">
        <div class="social-media">
            <p class="mb-0 d-flex">
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i
                            class="sr-only">Facebook</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i
                            class="sr-only">Twitter</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i
                            class="sr-only">Instagram</i></span></a>
                <a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i
                            class="sr-only">Dribbble</i></span></a>
            </p>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        function IsJsonString(str) {
          try {
            var json = JSON.parse(str);
            return (typeof json === 'object');
          } catch (e) {
            return false;
          }
        }
        /*$('#btnSearch').on('click', function(event){
            event.preventDefault();
            $.ajax({
                url:"timtintuc.php",
                method:"GET",
                data:$(this).serialize(),
                success:function(data){
                   console.log(data);
                   if(IsJsonString(data))
                   { var array = JSON.parse(data);

                    console.log(array);
                    var s='';
                    $.each( array, function( key, value ) {
                         // s = ' <div style=" background-color:red; height:50px; width:200px " >AAA</div>';

                        s =  '<div style="height:50px; background-color:red">'.value.' </div>';
                        '<div class="text p-4 float-right d-block">'+
                        '<div class="topper d-flex align-items-center">'+
                        '<div class="one py-2 pl-3 pr-1 align-self-stretch">'+
                            '<span class="day"></span></div>'+
                                 '<div class="two pl-0 pr-3 py-2 align-self-stretch">'+
                    '<span class="yr">QQQQ</span>'+
                    '<span class="mos">Nam/Tháng/Ngày</span>'+
                  // '</div></div>'
                // '<h3 class="heading mb-0"><a href="#">QQQQ</a></h3>'+
                // '<p id="cont">QQQQ</p>'+
                // '<p><a href="chitiet.php?id=QQQQ" class="btn btn-primary">Chi ti?t</a></p>'+
             // '</div></div></div>'
              

                console.log(s);
                $( "#search-tin-tuc" ).append(s);
        
       
                        //console.log(s);
                });

                }else   console.log(data);

                    

                }
            });
        });
     });*/

     $('#btnSearch').on('click', function(event){
         event.preventDefault();

        //alert("HI");


          $.ajax({
                        url:"timtintuc.php",
                        method:"GET",
                        data:$('#search_form').serialize(),
                        
                      
         
                        success:function(data){
                            //alert(data);
                             $("#kqSearch" ).empty(),
                             $("#an" ).empty(),
                            array = JSON.parse(data);
                            $.each( array, function( key, value ) {
                           s = '<div class="col-md-4" ><div class="blog-entry justify-content-end"><a href="blog-single.php" class="block-20" style="background-image: url(images/'+value.hinhanh+')"></a><div class="text p-4 float-right d-block"><div class="topper d-flex align-items-center"><div class="one py-2 pl-3 pr-1 align-self-stretch"><span class="day"></span></div><div class="two pl-0 pr-3 py-2 align-self-stretch"><span class="yr">'+value.ngaythang+'</span> <span class="mos">Nam/Tháng/Ngày</span></div></div> <h3 class="heading mb-0"><a href="#">'+value.tieude+'</a></h3> <p id="cont">'+value.noidung+'</p><p><a href="chitiet.php?id='+value.tintuc_id+'" class="btn btn-primary">Chi tiết</a></p></div> </div></div>';

         $( "#kqSearch" ).append(s);
     });
                
                           ////////////
                        
                        }
                    });
                    
      });
 });
</script>
