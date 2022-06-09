<!DOCTYPE html>
<html lang="pt-br" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PIX</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
  </head>
  <body>

    <div class="container">
      <div class="row">
        <div style="margin-top:30px;" class="col-md-12 text-center">
          <button type="button" name="button" class="btn btn-info" onclick="modalPix();" >Pagar com pix</button>
        </div>
      </div>
    </div>

    <!-- Modal com pix -->
    <div class="modal fade" id="modalPix" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Pagamento com pix</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="load" src="https://upload.wikimedia.org/wikipedia/commons/b/b1/Loading_icon.gif?20151024034921" alt="">

                    <div class="row" id="dix-pix" style="display:none;" >
                    <div class="col-md-12">
                        <img src="" id="img-pix" width="100%" alt="">
                    </div>
                    <div class="col-md-12">
                        <textarea name="code-pix" class="form-control" id="code-pix" rows="8" cols="80"></textarea>
                    </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>

    <script type="text/javascript">

      function modalPix(){
        $("#modalPix").modal('show');

        const data = {
            pix:true,
            description:'LT Developer pagamento de serviço',
            transaction_amount:10.50,
            payer:{
                email:'thiagoalves@ltdeveloper.com.br',
                first_name:'Thiago',
                address: {
                    zip_code:'88359002',
                    street_name:'Rua Botuverá',
                    street_number: '261',
                    neighborhood: 'Dom Joaquim',
                    city: 'Brusque',
                    federal_unit:'SC'
                }
            }
        }

        $.post('paymentPix.php',data,function(response){
            var obj = JSON.parse(response);
            var base64 = obj.transaction_data.qr_code_base64;
            var codePix = obj.transaction_data.qr_code;

            $("#load").hide();

            $("#img-pix").attr('src', 'data:image/jpeg;base64,'+base64);
            $("#code-pix").val(codePix);

            $("#dix-pix").show();
        });
      }

    </script>

  </body>
</html>
