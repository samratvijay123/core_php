<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Insert Product</title>
<link rel="stylesheet" href="styles.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script> <!-- Include jQuery Validation plugin -->
<style>
    .container {
    width: 50%;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="number"],
select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.hidden {
    display: none;
}

.error {
    color: red;
}

</style>
</head>
<body>

<div class="container">
    <h2>Insert Product</h2>
    <form id="productForm">
        <div class="form-group">
            <label for="productName">Product Name:</label>
            <input type="text" class="form-control" id="productName" name="productName" >
            <span id="productName_error" class="error"></span>
        </div>
        <div class="form-group">
            <label for="productCategory">Product Category:</label>
            <select class="form-control" id="productCategory" name="productCategory" >
                <option value="electronics">Electronics</option>
                <option value="clothing" checked>Clothing</option>
                <option value="books">Books</option>
            </select>
        </div>
        <div class="form-group">
            <label for="productPrice">Product Price:</label>
            <input type="number" class="form-control" id="productPrice" name="productPrice" >
            <span id="productPrice_error" class="error"></span>
        </div>
        <button type="submit" class="btn btn-primary">Insert Product</button>
    </form>
    <div id="successMessage" class="hidden">Product inserted successfully!</div>
</div>

<script>
$(document).ready(function () {
    // Define custom rule for validName
    $.validator.addMethod("validName", function(value, element) {
        return /^[a-zA-Z\s]*$/.test(value);
    }, "Please enter a valid name");

    $('#productForm').validate({
        rules: {
            productName: {
                required: true,
                validName: true,
                minlength: 8,
                maxlength: 20
            },
            productPrice: {
                required: true,
                digits: true,
                minlength: 3,
                maxlength: 5
            },
        },
        messages: {
            productName: {
                required: "Product name is required",
                minlength: "Product name must be at least 8 characters",
                maxlength: "Product name must not exceed 20 characters"
            },
            productPrice: {
                required: "Product price is required",
                digits: "Please enter a valid price",
                minlength: "Product price must be at least 3 digits",
                maxlength: "Product price must not exceed 5 digits"
            },
        },
        errorPlacement: function (error, element) {
            var name = element.attr("name");
            $("#" + name + "_error").html(error);
        },
        submitHandler: function(form) {
           alert("inserted successfully!");
        }
    });
});
</script>

</body>
</html>
