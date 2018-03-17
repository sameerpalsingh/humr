<%@ Language=VBScript %>
<!-- #include file="db.asp" -->
<!-- #include file="check_session.asp" -->
<!-- include file="config.asp" -->
<%


products_id=request.form("products_id")
'response.write (products_id)
set rs5 =Server.CreateObject("ADODB.Recordset")
sql5="delete from city where city_id="& products_id &" " 
'response.write (sql5)
rs5.Open sql5, objCon, 1, 3
Response.Write "<meta http-equiv='refresh' content='0;url=city_list.asp'>"
%>





