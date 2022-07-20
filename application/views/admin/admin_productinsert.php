<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_content">
            <span class="section"><?= $name ?></span>

            <form class="form-horizontal form-label-left insu">

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">카테고리 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control product" name="category_idx">
                    <? foreach ($category as $row) { ?>
                      <option value="<?= $row->category_idx ?>" <? if ($row->category_idx == $data->category_idx) {
                                                                  echo "selected";
                                                                } ?>><?= $row->category_name ?></option>
                    <? } ?>
                  </select>
                </div>
              </div>
              

              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">카테고리2 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <select class="form-control product" name="category_idx">
                    <? foreach ($category1 as $row) { ?>
                      <option value="<?= $row->category_idx ?>" <? if ($row->category_idx == $data->category_idx) {
                                                                  echo "selected";
                                                                } ?>><?= $row->category_name ?></option>
                    <? } ?>
                  </select>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"> 제휴 상품명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="name" class="form-control col-md-7 col-xs-12 req insure" name="insure_name" value="<?= $data->insure_name ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="company"> 제휴사 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="company" class="form-control col-md-7 col-xs-12 req insure" name="insure_company" value="<?= $data->insure_company ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logo"> 제휴사 로고 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="logo" value="<?= $data->insure_logo ?>">
                  <input type="hidden" name="insure_logo" value="<?= $data->insure_logo ?>">
                  <img src="<?= SURL ?>/assets/uploads/<?= $data->insure_logo ?>" <? if ($data->insure_logo == "") { ?> style="display : none;" <? } ?>>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="call"> 제휴 Call 번호 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="call" class="form-control col-md-7 col-xs-12 req insure" name="insure_call" value="<?= $data->insure_call ?>" required="required">
                </div>
              </div>


              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="rewardlogo"> 리워드 로고 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="rewardlogo" value="<?= $data->insure_rewardlogo ?>">
                  <input type="hidden" name="rewardlogo" value="<?= $data->insure_rewardlogo ?>">
                  <img src="<?= SURL ?>/assets/uploads/<?= $data->insure_rewardlogo ?>" <? if ($data->insure_rewardlogo == "") { ?> style="display : none;" <? } ?>>
                </div>
              </div> -->


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thumvideo2"> 메인 영상 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="thumvideo2" class="form-control col-md-7 col-xs-12 product youtubb req" name="product_thumvideo2" placeholder="embed 유튜브 URL" value="<?= $data->product_thumvideo2 ?>" required="required">
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thumvideo"> 상세페이지 영상<br> 이곳엔 유튜브 주소창?v=뒷부분만 삽입해주세요.<br> ex : peUFe-cwHI4 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="thumvideo" class="form-control col-md-7 col-xs-12 product youtubb req" name="product_thumvideo" placeholder="?v= 유튜브 URL" value="<?= $data->product_thumvideo ?>" required="required">
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_thumb"> 썸네일 배너 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="product_thumb" value="<?= $data->product_thumb ?>">
                  <input type="hidden" name="product_thumb" value="<?= $data->product_thumb ?>">
                  <img src="<?= SURL ?>/assets/uploads/<?= $data->product_thumb ?>" <? if ($data->product_thumb == "") { ?> style="display : none;" <? } ?>>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_img"> 상품 썸네일 이미지 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="product_img" value="<?= $data->product_img ?>">
                  <input type="hidden" name="product_img" value="<?= $data->product_img ?>">
                  <img src="<?= SURL ?>/assets/uploads/<?= $data->product_img ?>" <? if ($data->product_img == "") { ?> style="display : none;" <? } ?>>
                </div>
              </div>

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" f0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000or="product_idx2"> 타 링크 주소(있을 시) <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="product_idx2" class="form-control col-md-7 col-xs-12 product" name="product_idx2" placeholder="<?= $data->product_idx ?>" value="<?= $data->product_idx2 ?>" required="required">
                </div>
              </div>

              
              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="product_numget"> 링크 상품이라면 공백 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="product_numget" class="form-control col-md-7 col-xs-12 product" name="product_numget" placeholder="<?= $data->product_numget ?>" value="<?= $data->product_numget ?>" required="required">
                </div>
              </div> 


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="names"> 리워드 상품명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="names" class="form-control col-md-7 col-xs-12 req product" name="product_name" value="<?= $data->product_name ?>" required="required">
                </div>
              </div> 



              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> 심의필 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="insure_text2" class="form-control col-md-7 col-xs-12" name="insure_text2"><?= $data->insure_text2 ?></textarea>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> 광고 제한 설명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="insure_text" class="form-control col-md-7 col-xs-12" name="insure_text"><?= $data->insure_text ?></textarea>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="logos"> 리워드 상품 이미지 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="logos" value="">
                  <input type="hidden" name="product_logo" value="<?= $data->product_logo ?>">
                  <img src="<?= SURL ?>assets/uploads/<?= $data->product_logo ?>" <? if ($data->product_logo == "") { ?> style="display : none;" <? } ?>>
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="names"> 리워드 상품명 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="names" class="form-control col-md-7 col-xs-12 req product" name="product_name" value="<?= $data->product_name ?>" required="required">
                </div>
              </div>


              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="hashtag"> 리워드 상품 증정 내용 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="hashtag" class="form-control col-md-7 col-xs-12 req product" name="product_hashtag" value="<?= $data->product_hashtag ?>" required="required">
                </div>
              </div>


              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="thumvideo"> 썸네일 상품영상(2) <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="thumvideo" class="form-control col-md-7 col-xs-12 product youtubb req" name="product_thumvideo" placeholder="썸네일 유튜브 URL" value="<?= $data->product_thumvideo ?>" required="required">
                </div>
              </div> -->

              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="video"> 제휴사 광고 영상 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="video" class="form-control col-md-7 col-xs-12 req insure" name="insure_video" value="<?= $data->insure_video ?>" placeholder="유튜브 공유 URL" required="required">
                </div>
              </div> -->

              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="companys"> 상품사 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="text" id="companys" class="form-control col-md-7 col-xs-12 req product" name="product_company" value="<?= $data->product_company ?>" required="required">
                </div>
              </div> -->

              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="slide"> 상품사 영상 or 이미지 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="file" id="slide" value="" multiple>
                  <input type="hidden" name="product_slide" value="<?= $data->product_slide ?>">
                  <?
                  $images = explode(',', $data->product_slide);
                  foreach ($images as $row) { ?>
                    <img src="<?= SURL ?>assets/uploads/<?= $row ?>" class="slidess" <? if ($data->product_slide == "") { ?> style="display : none;" <? } ?>>
                  <? } ?>

                  <input type="text" class="form-control col-md-7 col-xs-12 product youtubb req" name="product_slidevideo" placeholder="유튜브 공유 URL" value="<?= $data->product_slidevideo ?>" required="required">
                </div>
              </div> -->

              <!-- <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"> 리워드 상품 내용 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <textarea id="product_gettext" class="form-control col-md-7 col-xs-12" name="product_gettext"><?= $data->product_gettext ?></textarea>
                </div>
              </div> -->

              <div class="item form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="time"> 남은 기간 <span class="required">*</span></label>
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <input type="date" id="time" class="form-control col-md-7 col-xs-12 req product" name="product_time" value="<?= $data->product_time ?>" required="required">
                </div>
              </div>

              <input type="hidden" name="product_idx" value="<?= $data->product_idx ?>">

              <div class="ln_solid"></div>
              <div class="form-group">
                <div class="col-md-6 col-md-offset-3">
                  <? if ($data) {
                    $id = "productedit";
                    $text = "수정하기";
                  } else {
                    $id = "productgo";
                    $text = "등록하기";
                  } ?>
                  <button id="<?= $id ?>" type="button" class="btn btn-success"><?= $text ?></button>
                  <button type="submit" style="display:none;"></button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->

<? require_once(APPPATH . "views/admin/admin_footer.php"); ?>

<script src="<?= base_url('assets/js/common.js') ?>?<?= TESTING ?>"></script>
<script src="<?= base_url('assets/js/admin.js') ?>?<?= TESTING ?>"></script>