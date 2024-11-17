document.getElementById('contact-form').addEventListener('submit', function (e) {
  e.preventDefault(); // Prevent default form submission

  // Create a FormData object to send form data
  const formData = new FormData(this);

  // Use fetch API to send data to backend.php
  fetch('backend.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.text())
  .then(data => {
      document.getElementById('response-message').innerText = data; // Display the response message
      this.reset(); // Reset the form fields
  })
  .catch(error => {
      console.error('Error:', error);
      document.getElementById('response-message').innerText = 'An error occurred. Please try again later.'; // Display error message
  });
});

// JavaScript to handle form submission
document.getElementById('contact-form').addEventListener('submit', function(e) {
  e.preventDefault(); // Prevent the default form submission

  // Create FormData object
  var formData = new FormData(this);

  // Send the form data using fetch
  fetch('backend.php', {
      method: 'POST',
      body: formData
  })
  .then(response => response.text())
  .then(data => {
      // Display the response message
      document.getElementById('response-message').innerText = data;
      // Optionally reset the form
      this.reset();
  })
  .catch(error => {
      document.getElementById('response-message').innerText = "Error submitting form.";
  });
});

