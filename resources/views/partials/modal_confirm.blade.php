<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<div class="modal fade" id="confirmDelete" tabindex="-1" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">X</button>
                <h3 class="modal-title">Delete Permanently </h3>
            </div>

            <div class="model-body">
                <p>Are you sure about this?</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger" id="confirm"><x>Confirm</x></button>
            </div>
        </div>
    </div>
</div>

<script>
    $('#confirmDelete').on('show.bs.modal', function (e) {
        $message = $(e.relatedTarget).attr('data-message');
        $(this).find('.modal-body p').text($message);
        $title = $(e.relatedTarget).attr('data-title');
        $(this).find('.modal-title').text($title);
        //Grabs Custom Settings from submission

        //Button text for action button
        $btntxt = $(e.relatedTarget).attr('data-btntxt');
        $(this).find('.modal-footer x').text($title);

        //Cancel button class
        $btncan = $(e.relatedTarget).attr('data-btncancel');
        //Primary action button class
        $btnac = $(e.relatedTarget).attr('data-btnaction');

        //Pass form reference to modal for submission on yes/ok
        var form = $(e.relatedTarget).closest('form');
        $(this).find('.modal-footer #confirm').data('form', form);
    });

    <!-- Form confirm (Yes/ok) handler, submits form-->
    $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
        $(this).data.form.submit();
    });
</script>