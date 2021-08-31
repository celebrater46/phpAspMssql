SQL Server

・DockerでSQLServerを起動&初期データ登録
https://qiita.com/urushibata/items/2d499e057fe9ed0cde64

・Docker内の php から SQL Server に接続する（2020年版）
https://qiita.com/imunew/items/f12d37a8df248b190e29

・Microsoft Drivers for PHP for SQL Server の Linux および macOS インストール チュートリアル
https://docs.microsoft.com/ja-jp/sql/connect/php/installation-tutorial-linux-mac?view=sql-server-ver15


$#########$#########$#########$#########$#########
210831

### Login
sqlcmd -S server -U user -P password
sqlcmd -S server -U user -P password -d database


### List of DBs
select name from sys.databases; -> go


### Create Table: 
create table members(
    id int identity(1,1) primary key,
    name nvarchar(32),
    birthday datetime
);


### List of Table
select name from sysobjects where xtype = 'U'
