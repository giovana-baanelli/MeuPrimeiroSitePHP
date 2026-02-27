<!DOCTYPE html>
<html lang="pt-br">
  <head>

  <meta charset="utf-8"
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agente Digital</title>
    <style>
      body{
        background-color: #FADADD;
      }
      
      p{border-style: dotted;}
      
      h3{
        float: left;
      }
      h1{
        text-align: center;
      }
      </style>
  </head>
  <body>
    <?php
    date_default_timezone_set('America/Sao_Paulo');
    $arquivo = "agenda.json";
    $tarefas = json_decode(file_get_contents($arquivo), true);
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $nova_tarefa = $_POST["tarefa"];
      $tarefas[] = [
        "tarefas" => $nova_tarefa,
        "data" => date("d/m/Y H:i:s")
      ];
    }
      file_put_contents($arquivo, json_encode($tarefas, JSON_PRETTY_PRINT));
    $tarefas = json_decode(file_get_contents($arquivo), true);
    ?>

    <h1>  мιηнα ℓιѕтαѕ ∂є тαяєƒαѕ
      ──────────୨ৎ────────────   </h1>
  
    <h2> <?php echo date('d/m/y') ?></h2>
    <h2> <?php echo date('H:i:s'); ?></h2

    <br/><br/>

    <form method="post" action="">
      <label for="tarefa">Tarefa</label>
      <input type="text" id="tarefa" name="tarefa">
      <input type="submit" value="Salvar">
    </form>
</form>
    <h2>𝙥𝙖𝙧𝙖 𝙝𝙤𝙟𝙚 𝙩𝙚𝙢𝙤𝙨; </h2>
    <ul>
    <li>
    <p> 𝙾 𝚚𝚞𝚎 𝚎𝚞 𝚝𝚎𝚗𝚑𝚘 𝚚𝚞𝚎 𝚏𝚊𝚣𝚎𝚛? 
      <?php echo htmlspecialchars($tarefas["tarefa"]); 
      ?></p>
      <p>𝚀𝚞𝚊𝚗𝚍𝚘 𝚎𝚞 𝚜𝚊𝚕𝚟𝚎𝚒 𝚎𝚜𝚜𝚊 𝚝𝚊𝚛𝚎𝚏𝚊?
      <?php echo htmlspecialchars($tarefas["data"]); ?></p>)
    </li>
      
    </ul>
    <p><?php echo $tarefas; ?></p>
  </body>
</html>
    
      <p><?php echo $tarefas; ?></p>
    
  </body>
</html>