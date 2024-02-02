<form action="post" method="POST">
    <div>
        <input type="text" name="userName" placeholder="Enter user name...">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit" class="btn-bg-primary">Submit</button>
</form>