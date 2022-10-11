var __BACKLOG = {
    projectID: 1465,
    apiURL: 'http://backlog.caters.jp:8969/backlog/api/v2/issues?apiKey=BdCsvaxPYaf1pAmddhRnKpg25z4qUhoTWsQRwnRTleE2lWjMj59LIgRAu1lZmEuy',
    issues: [
        {
            projectId: 0,
            summary: '課題作成テスト１',
            issueTypeId: 2,
            priorityId: 3,
        },
        {
            projectId: 0,
            summary: '課題作成テスト２',
            issueTypeId: 2,
            priorityId: 3
        },
    ],

    __run__: function ()
    {

        const listIssues = this.issues.map( function ( issue )
        {
            issue.projectId = this.projectID;
            return new URLSearchParams( issue ).toString();;
        }, this );



        listIssues.forEach( async function ( issue )
        {
            setTimeout( function ( e, issue )
            {
                const xhttp = new XMLHttpRequest();
                xhttp.open( "POST", e.apiURL );
                xhttp.setRequestHeader( "Content-type", "application/x-www-form-urlencoded" );
                xhttp.send( issue );

            }, 5000, this, issue )

        }, this );
    }
}

__BACKLOG.__run__();