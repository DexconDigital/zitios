<style>
        .subir{
            display: none;
            padding: 0 20px;
            padding-bottom: 4px;
            padding-top: 10px;
            background-color: #ea393e;
            color: white;
            font-size: 30px;
            cursor: pointer;
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 1;
            font-family: system;
            -webkit-box-shadow: 0px 3px 17px -5px rgba(0,0,0,0.67);
            -moz-box-shadow: 0px 3px 17px -5px rgba(0,0,0,0.67);
               box-shadow: 0px 3px 17px -5px rgba(0,0,0,0.67);
        }
    </style>

<i class="subir">^</i>
    <!-- Scripts -->
<script>
    $(document).ready(function(){

        $('.subir').click(function(){
            $('body, html').animate({
                scrollTop: '0px'
            }, 300);
        });

        $(window).scroll(function(){
            if($(this).scrollTop() > 200 ){
                $('.subir').fadeIn(500);
            }else{
                $('.subir').fadeOut(500);
            }
        });
    });
</script>