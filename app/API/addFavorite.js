


function addFavorite(productId,userId){
    console.log(productId,userId);
    fetch('./includes/addFavorite.php', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({ productId: productId, userId: userId }),
      })
        .then(response => response.json())
        .then(data => {
          // Handle the response, e.g., show a success message
          console.log(data.message);
          
          // Reload the page to see the updated data
        //   location.reload();
        })
        
}