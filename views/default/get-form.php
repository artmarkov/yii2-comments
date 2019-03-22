<?php

use artsoft\comments\Comments;
use artsoft\comments\widgets\CommentsForm;

?>

<?php if (!Comments::getInstance()->onlyRegistered || !Yii::$app->user->isGuest): ?>
    <?= CommentsForm::widget(compact('reply_to')) ?>
<?php endif; ?>