 <!-- content start -->
  <div class="admin-content">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">精品商城</strong> / <small>新增</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
       <!-- 表单start -->
        <form action=" " method=" " enctype="multipart/form-data" class="am-form am-form-horizontal">
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">商品名</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="">
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">计量单位</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="">
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">价格（元）</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="">
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">库存</label>
            <div class="am-u-sm-9">
              <input type="text" placeholder="">
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">商家名</label>
            <div class="am-u-sm-9"> 
                <select data-am-selected="{btnSize: 'sm'}">
                  <option value="option1">大凉山</option>
                  <option value="option1">优客逸家</option>
                </select>
              </div> 
          </div>
          
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">分类</label>
            <div class="am-u-sm-9"> 
                <select data-am-selected="{btnSize: 'sm'}">
                   <option value="option1">品牌街</option>
                  <option value="option1">途悦大赏</option>
                  <option value="option1">目的地</option>
                </select> 
            </div>
          </div>



          <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">简介</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" id="user-intro" placeholder="输入商品简介"></textarea>
              <small>250字以内对商品进行简介...</small>
            </div>
          </div> 

           <div class="am-form-group">
            <label for="user-intro" class="am-u-sm-3 am-form-label">颜色</label>
            <div class="am-u-sm-9">
              <label class="am-checkbox-inline">
                <input type="checkbox"  value="" data-am-ucheck> 红色
              </label>
              <label class="am-checkbox-inline">
                <input type="checkbox"  value="" data-am-ucheck> 白色
              </label>
              <label class="am-checkbox-inline">
                <input type="checkbox"  value="" data-am-ucheck> 黑色
              </label>
              <label class="am-checkbox-inline">
                <input type="checkbox"  value="" data-am-ucheck> 银色
              </label>
              <label class="am-checkbox-inline">
                <input type="checkbox"  value="" data-am-ucheck> 绿色
              </label>
            </div>
          </div>

          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">缩略图片</label>
            <div class="am-u-sm-9">
               <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
            </div>
          </div>
          <div class="am-form-group">
            <label class="am-u-sm-3 am-form-label">详情图片</label>
            <div class="am-u-sm-9">
                <div>
                  <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
                </div>
                <div>
                  <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
                </div>
                <div>
                  <input type="file" id="imgUpload" name="img[]" onchange="previewImage(this)" class="upload-add">
                  <!-- 图片实时预览 -->
                  <div id="preview"> <img style="border-radius: 3px;" src=" "> </div>
                </div>
            </div>
          </div> 

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="submit" class="am-btn am-btn-primary">保存</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->