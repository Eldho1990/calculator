<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    
    <div class="container">
        <div class="row result" id="result"></div>
        <form action="" method="post" id="form">
            
            <div class="row">
                <input type="number" name="first_operand" placeholder="First number">
            </div>
            <div class="row">
                <select name="operator">
                    <option value="add">+</option>
                    <option value="sub">-</option>
                    <option value="mult">*</option>
                    <option value="div">/</option>
                </select>
            </div>
            <div class="row">
                <input type="number" name="second_operand" placeholder="Second number">
            </div>
            <div class="row">
                <button type="submit" name="calculate">Calculate</button>
                <button type="button" id="clear">Clear</button>
            </div>
            
        </form>
    </div>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    

    <script>
        $(document).ready(function() {

            $('#form').on('submit', function (e) {

                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'ajax/calculations.php',
                    data: $('form').serialize(),
                    success: function (res) {
                        $('#result').html(res);
                    }
                });

            });

            $('#clear').click(function() {

                $('#result').html('');
                $('form')[0].reset();

            });

        });
    </script>
    <!-- script ends -->
</body>

</html>