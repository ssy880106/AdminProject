<?php include '../view/header.php';
$product = get_products();

 ?>
    <main>
	<div>
		<table> <!--  This creates a table where product and image are in the first <td>, then Description, Price, and add to cart form to be sent to cart folder  -->
            <tr>
                <th><h3>Product</h3></th><th><h3>Description</h3></th><th class="right"><h3>Price</h3></th>
             </tr>     
			<?php foreach ($product as $prod) : ?>
			
			<tr><td><img src="<?php echo $prod['productIMG']; ?>" alt="<?php echo $prod['productName']; ?>" /><br><?php echo $prod['productName'];?></td>
			<td><?php echo $prod['productDescription'];?></td><td><?php echo " $" . $prod['productPrice'];?></td>
			</tr><tr></tr>
           
            <?php endforeach; ?>
						  					    
		<!--  BoogerMan scares me!  Lol! -->
		</table>
	
	</div>

        <h1>Add Item</h1>
		
        <form action="." method="post">
            <input type="hidden" name="action" value="add">

            <label>Name:</label>
            <select name="productkey">
            <?php foreach($products as $key => $product) :
                $cost = number_format($product['productPrice'], 2);
                $name = $product['productName'] . " ";
                $item = $name . ' ($' . $cost . ')';
            ?>
                <option value="<?php echo $key; ?>">
                    <?php echo $item; ?>
                </option>
            <?php endforeach; ?>
            </select><br>

            <label>Quantity:</label>
            <select name="itemqty">
            <?php for($i = 1; $i <= 10; $i++) : ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php endfor; ?>
            </select><br>

            <label>&nbsp;</label>
            <input type="submit" value="Add Item">
        </form>
        <p><a href=".?action=show_cart">View Cart</a>&nbsp;&nbsp;<a href="../">Home</a>&nbsp;&nbsp;<a href="../products">Products</a>&nbsp;&nbsp;<a href="../about">About Us</a>&nbsp;&nbsp;<a href="../admin">Administrator</a></p>
    

    </main>
</body>
</html>