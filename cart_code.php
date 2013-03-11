function writeShoppingCart() {
	$cart = $_SESSION['cart'];
	if (!$cart) {
		return '<p>You have no items in your shopping cart</p>';
	} else {
		// Parse the cart session variable
		$items = explode(',',$cart);
		$s = (count($items) > 1) ? 's':'';
		return '<p>You have <a href="cart.php">'.count($items).' item'.$s.' in your shopping cart</a></p>';
	}
}

echo writeShoppingCart();


$cart = $_SESSION['cart'];
if ($cart) {
	$cart .= ','.$_GET['id'];
} else {
	$cart = $_GET['id'];
}
$_SESSION['cart'] = $cart;



$cart = $_SESSION['cart'];
if ($cart) {
	$items = explode(',',$cart);
	$contents = array();
	foreach ($items as $item) {
		$contents[$item] = (isset($contents[$item])) ? $contents[$item] + 1 : 1;
	}
    
    
    
    
    $total = 0;
$output[] = '<table>';
foreach ($contents as $id=>$qty) {
	$sql = 'SELECT * FROM books WHERE id = '.$id;
	$result = $db->query($sql);
	$row = $result->fetch();
	extract($row);
	$output[] = '<tr>';
	$output[] = '<td><a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>';
	$output[] = '<td>'.$title.' by '.$author.'</td>';
	$output[] = '<td>&pound;'.$price.'</td>';
	$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
	$output[] = '<td>&pound;'.($price * $qty).'</td>';
	$total += $price * $qty;
	$output[] = '</tr>';
}
$output[] = '</table>';
$output[] = '<p>Grand total: &pound;'.$total.'</p>';






$cart = $_SESSION['cart'];
$action = $_GET['action'];
switch ($action) {
	case 'add':
		if ($cart) {
			$cart .= ','.$_GET['id'];
		} else {
			$cart = $_GET['id'];
		}
		break;
	case 'delete':
		if ($cart) {
			$items = explode(',',$cart);
			$newcart = '';
			foreach ($items as $item) {
				if ($_GET['id'] != $item) {
					if ($newcart != '') {
						$newcart .= ','.$item;
					} else {
						$newcart = $item;
					}
				}
			}
			$cart = $newcart;
		}
		break;
}
$_SESSION['cart'] = $cart;






$output[] = '<form action="cart.php?action=update" method="post" id="cart">';
$output[] = '<table>';
foreach ($contents as $id=>$qty) {
	$sql = 'SELECT * FROM books WHERE id = '.$id;
	$result = $db->query($sql);
	$row = $result->fetch();
	extract($row);
	$output[] = '<tr>';
	$output[] = '<td><a href="cart.php?action=delete&id='.$id.'" class="r">Remove</a></td>';
	$output[] = '<td>'.$title.' by '.$author.'</td>';
	$output[] = '<td>&pound;'.$price.'</td>';
	$output[] = '<td><input type="text" name="qty'.$id.'" value="'.$qty.'" size="3" maxlength="3" /></td>';
	$output[] = '<td>&pound;'.($price * $qty).'</td>';
	$total += $price * $qty;
	$output[] = '</tr>';
}
$output[] = '</table>';
$output[] = '<p>Grand total: &pound;'.$total.'</p>';
$output[] = '<div><button type="submit">Update cart</button></div>';
$output[] = '</form>';






case 'update':
	if ($cart) {
		$newcart = '';
		foreach ($_POST as $key=>$value) {
			if (stristr($key,'qty')) {
				$id = str_replace('qty','',$key);
				$items = ($newcart != '') ? explode(',',$newcart) : explode(',',$cart);
				$newcart = '';
				foreach ($items as $item) {
					if ($id != $item) {
						if ($newcart != '') {
							$newcart .= ','.$item;
						} else {
							$newcart = $item;
						}
					}
				}
				for ($i=1;$i<=$value;$i++) {
					if ($newcart != '') {
						$newcart .= ','.$id;
					} else {
						$newcart = $id;
					}
				}
			}
		}
	}
	$cart = $newcart;
	break;
    
    
    
    
    
    