
function deleteFavorite(productId,userId) {
    var imgIcon = document.getElementById("WhiteH");
    fetch('./includes/deleteFavorite.php',{
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({ productId: productId, userId: userId }),
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
          
            
            console.log(data.message);
            location.reload();
        } else {
            console.log(data.error);
        }
        
            
      console.log(data.message);  
    })





}