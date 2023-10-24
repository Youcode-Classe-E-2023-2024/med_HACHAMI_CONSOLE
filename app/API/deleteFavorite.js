
function deleteFavorite(productId,userId) {

    fetch('./includes/deleteFavorite.php',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ productId: productId, userId: userId }),
    })
    .then(response => response.json())
    .then(data => {
      console.log(data.message);
      
   
      location.reload();
    })





}