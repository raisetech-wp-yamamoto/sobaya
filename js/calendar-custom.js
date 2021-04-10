document.addEventListener('DOMContentLoaded', function () {
    var calendarEl = document.getElementById('calendar');
    const myApiKey = gCalApi.API_KEY;
    const myID = gCalId.ID;

    /*　Dateオブジェクト生成 */
    // 注: 新しい Date オブジェクトをインスタンス化する唯一の正しい方法は、 new 演算子を使用することです。
    const today = new Date();

    /*　先々月末と来来月末　*/
    // today.getFullYear()　地方時に基づき、指定された日時の「年」 (4桁の年であれば4桁) を返します
    // today.getMonth() + 2　地方時に基づき、指定された日付の「月」を表す 0 を基点とした値 (すなわち 0 が年の最初の月を示す) を返します
    // todayが2021.01.31なら戻り値は　 Sun Feb 28 2021 00:00:00 GMT+0900 (日本標準時)
    const prevMonth_lastDate = new Date(today.getFullYear(), (today.getMonth()), 0);
    const nextMonth_lastDate = new Date(today.getFullYear(), (today.getMonth() + 2), 0);
    // console.log(prevMonth_lastDate);
    /*　lenに0で連結して列の最後の-lenまでを取り出す */
    // 例えば　１２月なら12→012→12　1月なら1→01→01
    function zeroPadding(num, len) {
        return (Array(len).join('0') + num).slice(-len);
    }

    /*　連結`year(4桁)-month-01`　*/
    startDate =
        `${prevMonth_lastDate.getFullYear()}-${zeroPadding(prevMonth_lastDate.getMonth() + 1 , 2)}-01`;
    endDate =
        `${nextMonth_lastDate.getFullYear()}-${zeroPadding(nextMonth_lastDate.getMonth() + 2, 2)}-01`;
    // console.log(startDate);

    var calendar = new FullCalendar.Calendar(calendarEl, {
        /*　カレンダーの表示範囲を当月の前後だけに制限する　*/
        validRange: function () {
            return {
                start: startDate,
                end: endDate
            };
        },
        contentHeight: 'auto',
        locale: 'ja',
        firstDay: 0,
        fixedWeekCount: true,
        showNonCurrentDates: false,
        headerToolbar: {
            left: "title",
            center: "",
            right: "prev,today,next"
        },
        buttonText: {
            today: '今月',
            month: '月',
            list: 'リスト'
        },

        /*　google calendar APIキーを入力  */
        googleCalendarApiKey: myApiKey,

        events: {
            /* google calendar IDを入力 */
            googleCalendarId: myID,

        },
        /* イベント背景色 */
        // eventColor: '#C1904F', 
        // eventTextColor: '#C1904F',　⇦CSSでopacity0にする
        eventBackgroundColor: '#C1904F',
        eventDisplay: 'background',

        /*　日付を消す　*/
        dayCellContent: function (e) {
            e.dayNumberText = e.dayNumberText.replace('日', '');
        },

    });

    calendar.render();


    // const mediaQueryList = window.matchMedia("(min-width:450px)");
    // // イベントリスナー　
    // const listener = (event) => {
    //   // リサイズ時に行う処理
    //   if (event.matches) {
    //     // 450px以上
    //     calendar.render();
    //   }
    // }
    // // リスナー登録
    // mediaQueryList.addListener(listener);
    // // 初期化処理
    // listener(mediaQueryList);


});

// ~~~~~~~~~~~~~~~~~~~~~ 少し小さいバージョン ~~~~~~~~~~~~~~~~~~~~~~~~
document.addEventListener('DOMContentLoaded', function () {
    var calendarElSmall = document.getElementById('calendar-small');
    const myApiKey = gCalApi.API_KEY;
    const myID = gCalId.ID;
    var calendarSmall = new FullCalendar.Calendar(calendarElSmall, {
        /*　カレンダーの表示範囲を当月の前後だけに制限する　*/
        validRange: function () {
            return {
                start: startDate,
                end: endDate
            };
        },
        contentHeight: 'auto',
        locale: 'ja',
        firstDay: 0,
        fixedWeekCount: true,
        showNonCurrentDates: false,
        headerToolbar: {
            left: "title",
            center: "",
            right: "prev,today,next"
        },
        buttonText: {
            today: '今月',
            month: '月',
            list: 'リスト'
        },

        /*　google calendar APIキーを入力  */
        googleCalendarApiKey: myApiKey,

        events: {
            /* google calendar IDを入力 */
            googleCalendarId: myID,

        },
        /* イベント背景色 */
        // eventColor: '#C1904F', 
        // eventTextColor: '#C1904F',　⇦CSSでopacity0にする
        eventBackgroundColor: '#C1904F',
        eventDisplay: 'background',

        /*　日付を消す　*/
        dayCellContent: function (e) {
            e.dayNumberText = e.dayNumberText.replace('日', '');
        },
    });

    calendarSmall.render();
});
