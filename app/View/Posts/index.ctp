<script>
 $(function(){
    setTimeout(function(){
        $('#flashMessage').fadeOut("slow");
    });
 });
</script>

<h2>記事一覧</h2>

<ul>
<?php foreach($posts as $post) : ?>
  <li>
  <?php 
      //debug($post);
      //echo h($post['Post']['title']);
      echo $this->Html->link($post['Post']['title'],'/posts/view/'.$post['Post']['id']); 
  ?>
  </li>
<?php endforeach;?>

<h2>Add post</h2>
<?php echo $this->Html->link('Add post',array('controller'=>'posts','action'=>'add')); ?>
</ul>