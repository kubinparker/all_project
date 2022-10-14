var __BACKLOG = {
    projectID: 1,
    issueTypeId: 0,
    // apiKey: 'BdCsvaxPYaf1pAmddhRnKpg25z4qUhoTWsQRwnRTleE2lWjMj59LIgRAu1lZmEuy',// 管理者
    apiKey: 'ubjICh6mgCnMHgT9GqAR4v3yMDOyNRGFq9tVHRXt7PSdZe5DlmHC1UqmYTaXNEMA',// 個人
    apiURL: 'http://backlog.caters.jp:8969/backlog/api/v2/{0}?apiKey={1}',
    issues: [
        {
            projectId: 0,
            summary: '【開発】ローカル環境で設定',
            issueTypeId: 0,
            priorityId: 3,
            col: '',
        },
        {
            projectId: 0,
            summary: '【開発】テスト環境に反映',
            issueTypeId: 0,
            priorityId: 3,
            col: '',
        },
        {
            projectId: 0,
            summary: '【開発】テスト環境のBasic認証設定の確認',
            issueTypeId: 0,
            priorityId: 3,
            col: 'passwd_task_id',
        },
        {
            projectId: 0,
            summary: '【開発】テスト依頼',
            issueTypeId: 0,
            priorityId: 3,
            col: '',
        },
        {
            projectId: 0,
            summary: '【開発】フィードバック修正',
            issueTypeId: 0,
            priorityId: 3,
            col: '',
        },
        {
            projectId: 0,
            summary: '【開発】本番に反映',
            issueTypeId: 0,
            priorityId: 3,
            col: 'publish_task_id'
        },
        {
            projectId: 0,
            summary: '【開発】本番メール交換の確認',
            issueTypeId: 0,
            priorityId: 3,
            col: 'mail_setting_task_id'
        }
    ],


    __get_issue_type__: function ()
    {
        var _this = this;

        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener( "load", function ()
        {
            var data = JSON.parse( this.response );
            _this.issueTypeId = ( data.find( element => element.name === 'タスク' ) ).id;
        } );
        xhttp.open( "GET", _this.apiURL.format( `projects/${ _this.projectID }/issueTypes`, _this.apiKey ), false );
        xhttp.send();
    },


    __create__: function ()
    {
        var _this = this;
        _this.__get_issue_type__();
        _this.issues.forEach( function ( issue )
        {
            issue.projectId = _this.projectID;
            issue.issueTypeId = _this.issueTypeId;
            var col = issue[ 'col' ];
            delete issue[ 'col' ];

            issue = new URLSearchParams( issue ).toString();

            const xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function ()
            {
                if ( col != '' && this.readyState == 4 )
                {
                    var reponse = JSON.parse( this.response );
                    update_input( reponse.id, col );
                }
            };
            xhttp.open( "POST", _this.apiURL.format( 'issues', _this.apiKey ), false );
            xhttp.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
            xhttp.send( issue );

        }, _this );
    },


    __read__: function ( issue_id, col, callback, element )
    {
        var _this = this;
        const xhttp = new XMLHttpRequest();
        xhttp.addEventListener( "load", function ()
        {
            callback( _this, JSON.parse( this.response ), col, element );
        } );
        xhttp.open( "GET", _this.apiURL.format( `issues/${ issue_id }`, _this.apiKey ), false );
        xhttp.send();
    },
}
