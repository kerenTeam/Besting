 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">图片管理</strong> / <small>合作伙伴</small></div>
    </div>

    <hr/>
<script language="javascript">// Example: obj = findObj("image1");
function findObj(theObj, theDoc)
{ 
var p, i, foundObj; 
if(!theDoc) theDoc = document; 
if( (p = theObj.indexOf("?")) > 0 && parent.frames.length) 
{    theDoc = parent.frames[theObj.substring(p+1)].document;    theObj = theObj.substring(0,p); } if(!(foundObj = theDoc[theObj]) && theDoc.all) foundObj = theDoc.all[theObj]; for (i=0; !foundObj && i < theDoc.forms.length; i++)     foundObj = theDoc.forms[i][theObj]; for(i=0; !foundObj && theDoc.layers && i < theDoc.layers.length; i++)     foundObj = findObj(theObj,theDoc.layers[i].document); if(!foundObj && document.getElementById) foundObj = document.getElementById(theObj);    return foundObj;
}
//添加一个参与人填写行
function AddSignRow(){ //读取最后一行的行号，存放在txtTRLastIndex文本框中 
var txtTRLastIndex = findObj("txtTRLastIndex",document);
var rowID = parseInt(txtTRLastIndex.value);

var signFrame = findObj("SignFrame",document);
//添加行
var newTR = signFrame.insertRow(signFrame.rows.length);
newTR.id = "SignItem" + rowID;

//添加列:序号
var newNameTD=newTR.insertCell(0);
//添加列内容
newNameTD.innerHTML = newTR.rowIndex.toString();

//添加列:合作商
var newNameTD=newTR.insertCell(1);
//添加列内容
newNameTD.innerHTML = "<input name='ptName" + rowID + "' id='txtName" + rowID + "' type='text' class='am-input-sm'/>";

//添加列:图片
var newEmailTD=newTR.insertCell(2);
//添加列内容
newEmailTD.innerHTML = "<div class='wx_type_img'><input type='file' id='imgUpload' name='img[]' onchange='previewImage(this)' class='upload-add'><div id='preview'> <img style='border-radius: 3px;' src='' alt='选择图片'> </div></div>";



//添加列:删除按钮
var newDeleteTD=newTR.insertCell(3);
//添加列内容
newDeleteTD.innerHTML = "<div class='am-btn-toolbar'><div class='am-btn-group am-btn-group-xs'><button type='submit' class='am-btn am-btn-default am-btn-xs am-text-secondary'><span class='am-icon-pencil-square-o'></span> 修改保存</button><a href='' class='am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only'><span class='am-icon-trash-o'></span> 删除</a></div></div>";

//将行号推进下一行
txtTRLastIndex.value = (rowID + 1).toString() ;
}
//删除指定行
function DeleteSignRow(rowid){
var signFrame = findObj("SignFrame",document);
var signItem = findObj(rowid,document);

//获取将要删除的行的Index
var rowIndex = signItem.rowIndex;

//删除指定Index的行
signFrame.deleteRow(rowIndex);

//重新排列序号，如果没有序号，这一步省略
for(i=rowIndex;i<signFrame.rows.length;i++){
signFrame.rows[i].cells[0].innerHTML = i.toString();
}
}//清空列表
function ClearAllSign(){
if(confirm('确定要清空所有参与人吗？')){
var signFrame = findObj("SignFrame",document);
var rowscount = signFrame.rows.length;

//循环删除行,从最后一行往前删除
for(i=rowscount - 1;i > 0; i--){
   signFrame.deleteRow(i);
}

//重置最后行号为1
var txtTRLastIndex = findObj("txtTRLastIndex",document);
txtTRLastIndex.value = "1";

//预添加一行
AddSignRow();
}
}
</script>
    <div class="am-g">
      <i class="fa fa-plus"></i><input type="button" name="Submit" value="添加" onclick="AddSignRow()" /> 
             <!-- <a href="javascript:" class="am-cf" onclick="AddSignRow()"><i class="fa fa-plus"></i> 新增</a> -->
                 <input name='txtTRLastIndex' type='hidden' id='txtTRLastIndex' value="1" />
       <div id="container" class="clearfix">
<div id="sidebar">
    <div id="content" class="defaults">
        <table class="am-table am-table-striped am-table-hover table-main" id="SignFrame">
            <thead>
              <tr>
                <th class="table-id">ID</th><th class="table-title">合作商</th><th class="table-date am-hide-sm-only">图片</th><th class="table-set">操作</th>
              </tr>
          </thead>
          <tbody id="movies">
        <form action="" method="" enctype="multipart/form-data" class="am-form am-form-horizontal">
            <tr>
              <td>1</td>
              <td><input type="text" name="ptname" value="阿里音乐" class='am-input-sm' /></td>
              <td>
              <div class="wx_type_img">
              	 <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src="" alt="选择图片"> </div>
				</div>
              </td>
              <td>
                <div class="am-btn-toolbar">
                  <div class="am-btn-group am-btn-group-xs">

                    <button type="submit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 修改保存</button>

                     <a href="" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</a>

                  </div>
                </div>
              </td>
            </tr>
            </form>
          </tbody>
        </table>
          <div class="am-cf">
  共 15 条记录
  <div class="am-fr">
    <div class="holder"></div> 
  </div>
</div>
    
</div>
</div>
</div>
    </div>
  </div>
  <!-- content end -->