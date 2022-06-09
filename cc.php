<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartão de Credito</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
   <!-- Add step #2 -->
   <script src="https://sdk.mercadopago.com/js/v2"></script>
   <script>
       const mp = new MercadoPago('TEST-f626b6f2-639c-4873-be8e-c2e262ac4ded');
       // Add step #3
   </script>

    <div class="container">
        <br><br>
        <form id="form-checkout" >
            <input type="text" name="cardNumber" id="form-checkout__cardNumber" class="form-control" />
            <input type="text" name="cardExpirationMonth" id="form-checkout__cardExpirationMonth" class="form-control" value="11" />
            <input type="text" name="cardExpirationYear" id="form-checkout__cardExpirationYear" class="form-control" value="25" />
            <input type="text" name="cardholderName" id="form-checkout__cardholderName" class="form-control" value="THIAGO ALVES"/>
            <input type="email" name="cardholderEmail" id="form-checkout__cardholderEmail" class="form-control" value="thiagoalves@ltdeveloper.com.br"/>
            <input type="text" name="securityCode" id="form-checkout__securityCode" class="form-control" value="123"/>
            <select name="issuer" id="form-checkout__issuer" class="form-control"></select>
            <select name="identificationType" id="form-checkout__identificationType" class="form-control"></select>
            <input type="text" name="identificationNumber" id="form-checkout__identificationNumber" class="form-control" value="42008138070"/>
            <select name="installments" id="form-checkout__installments" class="form-control"></select>
            <button type="submit" id="form-checkout__submit" class="btn btn-success">Pagar</button>
            <br><br>
            <div class="result"></div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" value="0" aria-valuemax="100"></div>
                <!-- <progress value="0" class="progress-bar">Carregando...</progress> -->
            </div>
        </form>
        <hr>
        <table class="table">
            <tbody>
                <tr>
                    <td>Mastercard</td>
                    <td>5031 4332 1540 6351</td>
                    <td>123</td>
                    <td>11/25</td>
                </tr>
                <tr>
                    <td>Visa</td>
                    <td>4235 6477 2802 5682</td>
                    <td>123</td>
                    <td>11/25</td>
                </tr>
                <tr>
                    <td>American Express</td>
                    <td>3753 651535 56885</td>
                    <td>123</td>
                    <td>11/25</td>
                </tr>
            </tbody>
        </table>
    </div>
    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="cc.js"></script>
</body>
</html>