/* Copyright (c) SocialLOFT LLC
 * mooSocial - The Web 2.0 Social Network Software
 * @website: http://www.moosocial.com
 * @author: mooSocial
 * @license: https://moosocial.com/license/
 */

(function (root, factory) {
    if (typeof define === 'function' && define.amd) {
        // AMD
        define(['jquery', 'mooFileUploader', 'mooBehavior', 'mooAlert', 'mooPhrase', 'mooUser', 'mooOverlay', 'mooGlobal', 'tinyMCE'], factory);
    } else if (typeof exports === 'object') {
        // Node, CommonJS-like
        module.exports = factory(require('jquery'));
    } else {
        // Browser globals (root is window)
        root.mooBlog = factory();
    }
}(this, function ($, mooFileUploader, mooBehavior, mooAlert, mooPhrase, mooUser, mooOverlay, mooGlobal, tinyMCE) {

    // init js on blog create action
    // app/Plugin/Blog/View/Blogs/create.ctp
    var initOnCreate = function () {
        //added by khs
        //$("#header_mobi").css("display", "none");
        //$(".default-body").css("overflow", "hidden");
        $(".default-body").css("background", "white");

        $('.notify_group').css('display', 'none');
        $('.mobile-footer').css('display', 'none');
        $("#footer").css("display", "none");

        if($("#id").val() != ""){
            setFormDesign();

            if($("#like_id").val() != 0){
                $("#sd_"+ $("#like_id").val()).attr("src", $('#img_url').val() + "img/blogs/like_area.png");
                $("#ch_1").attr("src", $('#img_url').val() + "img/blogs/ch_r.png");
            }

            if($("#dislike_id").val() != 0){
                $("#sd_"+ $("#dislike_id").val()).attr("src", $('#img_url').val() + "img/blogs/dislike_area.png");
                $("#ch_2").attr("src", $('#img_url').val() + "img/blogs/ch_r.png");
            }
        }
        //added by khs

        var uploader = new mooFileUploader.fineUploader({
            element: $('#photos_upload')[0],
            autoUpload: false,
            text: {
                uploadButton: '<div class="upload-section"><i class="material-icons">photo_camera</i>' + mooPhrase.__('drag_or_click_here_to_upload_photo') + '</div>'
            },
            validation: {
                allowedExtensions : mooConfig.photoExt,
                sizeLimit : mooConfig.sizeLimit
            },
            request: {
                endpoint: mooConfig.url.base + "/blog/blog_upload/images"
            },
            callbacks: {
                onError: mooGlobal.errorHandler,
                onComplete: function (id, fileName, response) {
                	$('#blog_photo_ids').val($('#blog_photo_ids').val() + ',' + response.photo_id);
                    tinyMCE.activeEditor.insertContent('<p align="center"><a href="' + response.large + '" class="attached-image"><img src="' + response.thumb + '"></a></p><br>');
                }
            }
        });

        $('#triggerUpload').unbind('click');
        $('#triggerUpload').click(function () {
            uploader.uploadStoredFiles();
        });

        $('#saveBtn').unbind('click');
        $('#saveBtn').click(function () {
            $(this).addClass('disabled');
            if (tinyMCE.activeEditor !== null) {
                $('#editor').val(tinyMCE.activeEditor.getContent());
            }
            mooBehavior.createItem('blogs', true);
        });

        var uploader1 = new mooFileUploader.fineUploader({
            element: $('#camera_thumnail')[0],
            multiple: false,
            text: {
                uploadButton: '<img src="' + $('#img_url').val() + 'img/blogs/btn_upload_1.png"/>'
                //uploadButton: '<div class="upload-section"><i class="material-icons">photo_camera</i>' + mooPhrase.__('drag_or_click_here_to_upload_photo') + '</div>'
            },
            validation: {
                allowedExtensions: mooConfig.photoExt,
                sizeLimit: mooConfig.sizeLimit
            },
            request: {
                endpoint: mooConfig.url.base + "/blog/blog_upload/avatar"
            },
            callbacks: {
                onError: mooGlobal.errorHandler,
                onSubmit: function (id, fileName) {
                    $(".qq-upload-list").css("display", "none");
                    $("#divLoading").css("display", "block");
                },
                onComplete: function (id, fileName, response) {
                    //added by khs 
                    $("#divLoading").css("display", "none");
                    setFormDesign();
                    //added by khs

                    $('#blog_thumnail_preview > img').attr('src', response.thumb);
                    $('#blog_thumnail_preview > img').show();
                    $('#thumbnail').val(response.file);
                }
            }
        });

        var uploader2 = new mooFileUploader.fineUploader({
            element: $('#gallery_thumnail')[0],
            multiple: false,
            text: {
                uploadButton: '<img src="' + $('#img_url').val() + 'img/blogs/btn_upload_2.png"/>'
                //uploadButton: '<div class="upload-section"><i class="material-icons">photo_camera</i>' + mooPhrase.__('drag_or_click_here_to_upload_photo') + '</div>'
            },
            validation: {
                allowedExtensions: mooConfig.photoExt,
                sizeLimit: mooConfig.sizeLimit
            },
            request: {
                endpoint: mooConfig.url.base + "/blog/blog_upload/avatar"
            },
            callbacks: {
                onError: mooGlobal.errorHandler,
                onSubmit: function (id, fileName) {
                    $(".qq-upload-list").css("display", "none");
                    $("#divLoading").css("display", "block");
                },
                onComplete: function (id, fileName, response) {
                    //added by khs 
                    $("#divLoading").css("display", "none");
                    setFormDesign();
                    //added by khs

                    $('#blog_thumnail_preview > img').attr('src', response.thumb);
                    $('#blog_thumnail_preview > img').show();
                    $('#thumbnail').val(response.file);
                }
            }
        });


        // bind action to button delete
        deleteBlog();
        
        // toggleUploader
        $('#toggleUploader').unbind('click');
        $('#toggleUploader').on('click', function(){
            $('#images-uploader').slideToggle();
        });
    }

    //added by khs
    var setFormDesign = function () {
        $("#hd_step").val("1");
        $("#btnPrev").css("display", "block");
        $("#btnNext").css("display", "block");

        $(".sd").css('width', parseInt($('#blog_grid').css('width'))/3 + 'px');
        $(".sd").css('height', parseInt($('#blog_grid').css('height'))/3 + 'px');

        $('#blog_thumnail_preview > img').css('width', parseInt($('#blog_grid').css('width')) + 'px');
        $('#blog_thumnail_preview > img').css('height', parseInt($('#blog_grid').css('height')) + 'px');

        $('#blog_sd_area').css('width', parseInt($('#blog_grid').css('width')) + 'px');
        $('#blog_sd_area').css('height', parseInt($('#blog_grid').css('height')) + 'px');
        $("#blog_sd_area").css("display", "block");

        $("#divThumbnail").fadeOut("slow");
    }
    //added by khs

    // app/Plugin/Blog/View/Blogs/view.ctp
    var initOnView = function () {
        mooOverlay.registerImageOverlay();
        
        // bind action to button delete
        deleteBlog();
        
        // init action addfriend
        mooUser.initRespondRequest();
    }

    var initOnEdit = function () {

    }
    
    // app/Plugin/Blog/View/Elements/lists/blogs_list.ctp
    var initOnListing = function(){
        mooBehavior.initMoreResults();
        
        // bind action to button delete
        deleteBlog();
        
        $('.likeItem').unbind('click');
        $('.likeItem').click(function(){
            
            var obj = $(this);
            
            var data = $(this).data();
            
            var type = data.type;
            var item_id = data.id;
            var thumb_up = data.status;
            
            $.post(mooConfig.url.base + '/likes/ajax_add/' + type + '/' + item_id + '/' + thumb_up, { noCache: 1 }, function(data){
                try
                {
                    var res = $.parseJSON(data);

                    obj.parents('.like-section:first').find('.likeCount:first').html( parseInt(res.like_count) );
                    obj.parents('.like-section:first').find('.dislikeCount:first').html( parseInt(res.dislike_count) );

                    if ( thumb_up )
                    {
                        obj.toggleClass('active');
                        obj.next().next().removeClass('active');
                    }
                    else
                    {
                        obj.toggleClass('active');
                        obj.prev().prev().removeClass('active');
                    }
                }
                catch (err)
                {
                    mooUser.validateUser();
                }
            });
        });
    }
    
    var deleteBlog = function(){
        $('.deleteBlog').unbind('click');
        $('.deleteBlog').click(function(){
           
           var data = $(this).data();
           var deleteUrl = mooConfig.url.base + '/blogs/delete/' + data.id;
           mooAlert.confirm(mooPhrase.__('are_you_sure_you_want_to_remove_this_entry'), deleteUrl);
        });
    }

    return {
        initOnCreate : initOnCreate,
        initOnView : initOnView,
        initOnEdit : initOnEdit,
        initOnListing : initOnListing
    }

}));