<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="./lib/css/styles.css">
</head>
<body>
    <div class="container">
        <a href="index.php?controller=user&action=logout"><button class="btn btn-secondary">Déconnexion</button></a>
        <h1 class="text-center my-3">Chat en ligne</h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                    <select id="messages" class="form-control" size="10">
                        <?php 
                            $res = getMessages(); 
                            
                            if ($res->num_rows > 0) {
                                while($row = $res->fetch_assoc()) {
                                    echo '<option>' . $row["timestamp"] . ': ' . $row["message"]  . '</option>';
                                }
                            } else {
                                echo '<p>Aucun message à afficher.</p>';
                            }
                        ?>
                       </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2 my-3">
                <form id="chat-form" action="?controller=chat&action=envoieMessage" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" id="message" name="message" placeholder="Entrez votre message">
                    </div>
                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>