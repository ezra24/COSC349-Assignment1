<!DOCTYPE HTML PUBLIC "-//IETF//DTD HTML//EN">
<html>
<head><title>IT Asset Management System</title>
<style>
th { text-align: left; }

table, th, td {
  border: 2px solid grey;
  border-collapse: collapse;
}

th, td {
  padding: 0.2em;
}
</style>
</head>

<body>
<h1>System for registering new IT assets for ease of tracking</h1>

<h3>Fill in the form with new asset details </h3>
<form>
  <label for="assetID">AssetID:</label><br>
  <input type="text" id="assetID" name="assetID"><br>
  <label for="assetType">AssetType:</label><br>
  <input type="text" id="assetType" name="assetType"><br>
  <label for="brand">Brand:</label><br>
  <input type="text" id="brand" name="brand"><br>
  <label for="modelNo">Model Number:</label><br>
  <input type="text" id="modelNo" name="modelNo"><br>
  <label for="serialNo">Serial Number:</label><br>
  <input type="text" id="serialNo" name="serialNo"><br>
  <label for="datePurchased">Date Purchased:</label><br>
  <input type="text" id="datePurchased" name="datePurchased"><br>
  <label for="location">Location:</label><br>
  <input type="text" id="location" name="location"><br>
  <input type="reset">
  <input type="submit" value="Submit">
</form>

<p>You likely now want to <a href="test-database.php">proceed to your webserver's
database connection testing page</a>. However, note that if there is a network problem reaching the database, the database connection testing page will spend a minute or so waiting before it produces any content.</p>

<p>For your assignment work, your project should begin on this page. The only reason the database testing page was not placed within <kbd>index.php</kbd> was to assist you in debugging any network problems you might be having.</p>

</body>
</html>
