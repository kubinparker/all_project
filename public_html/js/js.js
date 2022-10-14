function chosse_project ( e )
{
    var _this = $( e );
    if ( !_this.hasClass( 'is_show' ) )
    {
        read_status_issue( __BACKLOG, null, null, _this );
    }
    _this.toggleClass( 'is_show' );
}


function read_status_issue ( backlogObj, task_info, col, e )
{

    const _task_info = task_info || false;
    var project_box = e.parents( '.row' ).find( '.collapse' );

    if ( !_task_info )
    {

        backlogObj.issues.forEach( function ( issue )
        {
            if ( issue.col != '' )
            {
                const _input = project_box.find( `input[name="${ issue.col }"]` ),
                    taskid = _input.val(),
                    issed = _input.siblings( 'input' ).val();
            
                if ( taskid != '' && parseInt( taskid ) != 0 && parseInt( issed ) == 0 ) backlogObj.__read__( parseInt( taskid ), issue.col, read_status_issue, e );
            }
        } );
    } else
    {
        const issue_status = task_info.status.id,
            _input = project_box.find( `input[name="${ col }"]` ),
            row_id = project_box.attr( 'data-id' ),
            _input_issed = _input.siblings( 'input' ).attr( 'name' ),
            csrfToken = $( "meta[name='__token__']" ).attr( "content" );

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