<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GIA PHẢ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #c0a16b;
                color: #000;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .tree{
                float: left;
                width: max-content;

            }
            .tree ul {

                padding-top: 20px;
                position: relative;
                transition: all 0.5s;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;

            }
            .tree li {
                float: left;
                text-align: center;
                list-style-type: none;
                position: relative;
                padding: 20px 5px 0 5px;
                transition: all 0.5s;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;
            }

            /*We will use ::before and ::after to draw the connectors*/
            .tree li::before, .tree li::after{
                content: '';
                position: absolute;
                top: 0;
                right: 50%;
                border-top: 1px solid #ccc;
                width: 50%; height: 20px;
            }
            .tree li::after{
                right: auto; left: 50%;
                border-left: 1px solid #ccc;
            }

            /*We need to remove left-right connectors from elements without
            any siblings*/
            .tree li:only-child::after, .tree li:only-child::before {
                display: none;
            }

            /*Remove space from the top of single children*/
            .tree li:only-child{ padding-top: 0;}

            /*Remove left connector from first child and
            right connector from last child*/

            .tree li:first-child::before, .tree li:last-child::after{
                border: 0 none;
            }

            /*Adding back the vertical connector to the last nodes*/
            .tree li:last-child::before{
                border-right: 1px solid #ccc;
                border-radius: 0 5px 0 0;
                -webkit-border-radius: 0 5px 0 0;
                -moz-border-radius: 0 5px 0 0;
            }

            .tree li:first-child::after{
                border-radius: 5px 0 0 0;
                -webkit-border-radius: 5px 0 0 0;
                -moz-border-radius: 5px 0 0 0;
            }
            /*Time to add downward connectors from parents*/

            .tree ul ul::before{
                content: '';
                position: absolute; top: 0; left: 50%;
                border-left: 1px solid #ccc;
                width: 0; height: 20px;
            }
            .tree li a{
                border: 1px solid #ccc;
                padding-right: 5px;
                text-decoration: none;
                color: #000;
                font-family: arial, verdana, tahoma;
                font-size: 11px;
                display: inline-block;
                border-radius: 5px;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                transition: all 0.5s;
                -webkit-transition: all 0.5s;
                -moz-transition: all 0.5s;
            }

            .tree li a div{
                float: left;
                width: max-content;
                margin:5px 0px 5px 5px;
            }

            .tree li a div:first-child{
                border: 1px solid red;
            }

            /*Time for some hover effects*/
            /*We will apply the hover effect the the lineage of the element also*/

            .tree li a:hover, .tree li a:hover+ul li a {
                background: #c8e4f8;
                color: #000;
                border: 1px solid #94a0b4;

            }

            /*Connector styles on hover*/
            .tree li a:hover+ul li::after,
            .tree li a:hover+ul li::before,
            .tree li a:hover+ul::before,
            .tree li a:hover+ul ul::before{
                border-color:  #94a0b4;
            }

        </style>
    </head>
    <body>
    <div class="tree">
        <ul>
            <li>
                <a href="#">
                    <div><img src="/img/man.png" style="width: 100px; height: 125px"><br><p>Vo Huy Hải</p></div>
                    <div><img src="/img/girl.png" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Tên</p></div>
                </a>
                <ul>
                    <li>
                        <a href="#">
                            <div><img src="/img/man.png" style="width: 100px; height: 125px"><br><p>Vo Huy Trí</p></div>
                            <div><img src="/img/girl.png" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Tên</p></div>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <div><img src="/img/man.png" style="width: 100px; height: 125px"><br><p>Vo Thị Minh</p></div>
                                    <div><img src="/img/girl.png" style="width: 100px; height: 125px"><br><p>Nguyễn Văm Diên</p></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Trung</p></div>
                            <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Ánh Hội</p></div>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Tam</p></div>
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Minh</p></div>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Hoài</p></div>
                                            <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Ánh Hồng</p></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Hiệp</p></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Vo Thị Liên</p></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Trung</p></div>
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Ánh Hội</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Võ Thị Bình</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Võ Thị Châu</p></div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Hữu</p></div>
                            <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Hai</p><p>(Bà Quyền)</p></div>
                        </a>
                        <ul>
                            <li>
                                <a href="#">
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Quyền</p></div>
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Võ Thị Châu</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">

                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Vo Thị Em(Bà Lương Hữu)</p></div>
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Phạm Tiến Lương</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Đíu</p></div>
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Liên</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Võ Thị Chiu</p></div>
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Nguyễn Sư Yên</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Tứ</p></div>
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Niên</p></div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Lộc</p></div>
                                    <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Lê Thị Điup</p></div>
                                </a>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Trung</p></div>
                                            <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Nguyễn Thị Ánh Hội</p></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div><img src="/img/hehe.png" style="width: 100px; height: 125px"><br><p>Vo Huy Hiếu</p></div>
                                            <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Bùi Thị Nhàn</p></div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div><img src="/img/vo.jpg" style="width: 100px; height: 125px"><br><p>Võ Thị Mai</p></div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    </body>
</html>
