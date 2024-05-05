<!DOCTYPE HTML>
<html>
<body>

<div class="container">
    <h1>Grade Records</h1>
    <p>Insert student's name and scores into the input box below:</p>
    <form class="form-inline m-2" action="create.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" class="form-control m-2" id="name" name="name">
        <label for="score">Score:</label>
        <input type="number" class="form-control m-2" id="score" name="score">
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
<div class="container">
    <H3>Delete student</H3>
    <p>Enter the student's name to be deleted from below:</p>
    <form class="form-inline m-2" action="delete.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" class="form-control m-2" id="name" name="name">
        <button type="submit" class="btn btn-primary">Remove</button>
    </form>
</div>
<div class="container">
    <p>List of grades:</p>
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Score</th>
        </tr>
        </thead>
        <tbody>
        <?php include "getData.php"; ?>
        </tbody>
    </table>
</div>
</body>
</html>