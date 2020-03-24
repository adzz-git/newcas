<div class="h-100 background-complimentary">
  <div class="h-100 gradient-dark">
    <div class="container h-100">
      <div class="row h-100 justify-content-center">
        <div class="col-md-4 align-self-center">
          <div class="bg-white p-3 border shadow">
            <?php if(!empty($messages)): ?>
              <?php print $messages; ?>
            <?php endif; ?>
            <?php print render($page['content']); ?>
            <?php if(empty($user->uid)): ?>
              <div class="font-s border-top mt-2 pt-2">
                <a class="color-main" href="/user/password">Password Reset</a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
