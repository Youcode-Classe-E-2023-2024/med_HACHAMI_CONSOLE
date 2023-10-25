function addFavorite(productId, userId) {
  var imgIcon = document.getElementById("WhiteH");
  console.log(imgIcon);
  fetch('./includes/addFavorite.php', {
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
  })
  
}
