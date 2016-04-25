 <script src="<?php echo base_url() ?>/public/dist/js/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url() ?>/public/dist/js/bootstrap.min.js"></script>
 
<script>
        $(document).ready(function(){
            $("#btnMua").click(function(){
             
                  var msp =$("#btnMua").attr('name');
               var sl =$("#soluong").val();
               if(sl<=0)
               {
                    alert('Vui lòng nhập số lượng lớn hơn 0');
                    return;
               }
               
               $.ajax({
                    url: "<?php echo base_url().'index.php?c=cart&m=additem'?>",
                    type: "POST",
                    data: { masanpham : msp , soluong : sl },
                    dataType : 'text',                    
                    success: function(result){
                        //console.log(result)
                        var tt=result.split('|');
                        $("#ttgh").html(tt[0] + "Sản Phẩm (" + formatCurrency(tt[1]) + " VND)");
                    }                    
                });                              
            });
            $("#btnHuy").click(function(){
                $.ajax({
                   
                    url: "<?php echo base_url().'index.php?c=cart&m=delete'?>",
                    type: "POST",
                    
                    dataType : 'text',                    
                    success: function(){                        
                        
                        $("#ttgh").html("0 Sản phẩm ( 0 VND)");
                        $("#divGioHang").html('<h2 align="center" style="margin-top: 20px">Giỏ hàng rỗng</h2>');
                        
                    }                    
                });    
            });
        });
               
               
               

        function formatCurrency(num) 
        {
           num = num.toString().replace(/\$|\,/g,'');
           if(isNaN(num))
           num = "0";
           sign = (num == (num = Math.abs(num)));
           num = Math.floor(num*100+0.50000000001);
           num = Math.floor(num/100).toString();
           for (var i = 0; i < Math.floor((num.length-(1+i))/3); i++)
           num = num.substring(0,num.length-(4*i+3))+','+
           num.substring(num.length-(4*i+3));
           return (((sign)?'':'-') + num);
        }
    </script>
    <script >
    function confirmAction() {
      return confirm("Bạn có muốn xóa không ?")
    }
</script>