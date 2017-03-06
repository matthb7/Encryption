<?php

  require_once('../../private/initialize.php');

  $message_text = '';
  $validity_text = '';
  $sender = $current_user;
  $signature = '';

  if(!isset($_GET['id'])) {
    redirect_to('index.php');
  }

  $id = $_GET['id'];
  $agent_result = find_agent_by_id($id);
  $agent = db_fetch_assoc($agent_result);

  $message_result = find_messages_for($agent['id']);

?>

<!doctype html>

<html lang="en">
  <head>
    <title>Messages</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <link rel="stylesheet" media="all" href="<?php echo DOC_ROOT . '/includes/styles.css'; ?>" />
  </head>
  <body>
    
    <a href="<?php echo url_for('/agents/index.php') ?>">Back to List</a>
    <br/>

    <h1>Messages for <?php echo h($agent['codename']); ?></h1>
    
    <?php if($current_user['id'] == $agent['id']) { ?>
      <p>Your messages are automatically decrypted using your private key.</p>
    <?php } ?>
    
    <table>
      <tr>
        <th>Date</th>
        <th>To</th>
        <th>From</th>
        <th>Message</th>
        <th>Signature</th>
      </tr>
      
      <?php while($message = db_fetch_assoc($message_result)) { ?>
        <?php
          $created_at = strtotime($message['created_at']);
          
          // Oooops.
          // My finger accidentally hit the delete-key.
          // Sorry, APEX!!!
          $agent_is_current_user = $agent['id'] == $current_user['id'];
          $message_text = !$agent_is_current_user ? $message['cipher_text'] : pkey_decrypt($message['cipher_text'], $agent['private_key']);
          $result = verify_signature($message['cipher_text'], $message['signature'], $sender['public_key']);
          $validity_text = $result === 1 ? 'Valid' : 'Not valid';
          
        ?>
        <tr>
          <td><?php echo h(strftime('%b %d, %Y at %H:%M', $created_at)); ?></td>
          <td><?php echo h($agent['codename']); ?></td>
          <td><?php echo h($sender['codename']); ?></td>
          <td class="message"><?php echo h($message_text); ?></td>
          <td class="message"><?php echo h($validity_text); ?></td>
        </tr>
      <?php } ?>
    </table>
    
  </body>
</html>