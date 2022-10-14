$( function ()
{
    // onload
    read_status_issue( __BACKLOG );

    // 登録ボタンをクリック
    var oneClick = true;
    // フォームボタン
    $( '.submitButtonPost' ).on( 'click', function ()
    {
        if ( oneClick )
        {
            oneClick = !oneClick;

            var is_create_task = $( 'input[name="task_created"]:checked' ).val();
            var backlog_id = $( 'input[name="backlog_id"]' ).val();

            if ( parseInt( is_create_task ) == 1 && backlog_id != '' && parseInt( backlog_id ) != 0 )
            {
                console.log( '課題作成開始。。。' );
                __BACKLOG.projectID = parseInt( backlog_id );
                __BACKLOG.__create__();
                $( this ).closest( 'form' ).submit();

            } else $( this ).closest( 'form' ).submit();
        }

        return false;
    } );

} );

// callback after create backlog success
// set value for input hidden
function update_input ( val, input_name )
{
    $( `input[name="${ input_name }"]` ).val( val );
}


function read_status_issue ( backlogObj, task_info, col )
{
    const _task_info = task_info || false;

    if ( !_task_info )
    {
        backlogObj.issues.forEach( function ( issue )
        {
            if ( issue.col != '' )
            {
                const _input = $( `input[name="${ issue.col }"]` ),
                    taskid = _input.val(),
                    issed = _input.siblings( 'input' ).val();

                if ( taskid != '' && parseInt( taskid ) != 0 && parseInt( issed ) == 0 ) backlogObj.__read__( parseInt( taskid ), issue.col, read_status_issue );
            }
        } );
    } else
    {
        const issue_status = task_info.status.id,
            _input = $( `input[name="${ col }"]` ),
            row_id = $( '#id' ).val(),
            _input_issed = _input.siblings( 'input' ).attr( 'name' ),
            csrfToken = $( `input[name="_csrfToken"]` ).val();

        var dt = { 'id': row_id };
        dt[ _input_issed ] = issue_status == 3 || issue_status == 4;
        dt[ '_csrfToken' ] = csrfToken;
        if ( !dt[ _input_issed ] ) return false;

        $.ajax( {
            url: `/project/${ row_id }`,
            type: 'POST',
            data: dt,
            dataType: 'json',
            success: function ( resp )
            {
                if ( resp.success )
                {
                    _input.siblings( 'input' ).val( 1 );
                    _input.siblings( 'span' ).removeClass( 'badge-danger' ).addClass( 'badge-success' ).text( 'している' );
                }
            }
        } )

    }

}