var React = require('react');
var CHAT_CONSTANTS = require('../constants/ChatConstants');
var ChatMooConfig = require("../utils/ChatMooConfig");



var Avatar = React.createClass({
    handleImageErrored:function(){
        // Fail with CDN so we will use web url

        var src = this.props.src;
        var url = src.replace(ChatMooConfig.getStorageUrl(),ChatMooConfig.getWebUrl() + '/uploads');
        this.setState({ src: url });
    },
    handleImageLoaded:function(){
        this.setState({loading:false});
    },
    getInitialState:function() {
        return {
            src:"",
            loading:true
        }
    },
    render:function(){
        if(this.state.loading){
            var gifLoading = ChatMooConfig.getSiteUrl()+'/chat/img/flickr.gif';

            if(this.state.src == ""){
                return <div ><img className={this.props.className} src={gifLoading}/><img style={{display:'none'}}  className={this.props.className} src={this.props.src} onLoad={this.handleImageLoaded} onError={this.handleImageErrored}/></div>;
            }else{
                return <div ><img className={this.props.className} src={gifLoading}/> <img style={{display:'none'}} className={this.props.className} src={this.state.src} onLoad={this.handleImageLoaded} onError={this.handleImageErrored}/> </div>;
            }
        }else{
            var  atr={};
            if(this.props.hasOwnProperty('dataTip')){
                atr['data-tip'] =this.props.dataTip;
            }
            if(this.props.hasOwnProperty('dataPlace')){
                atr['data-place'] =this.props.dataPlace;
            }
            if(this.props.hasOwnProperty('title')){
                atr['title'] =this.props.title;
            }
            if(this.props.hasOwnProperty('width')){
                atr['width'] =this.props.width;
            }
            if(this.props.hasOwnProperty('height')){
                atr['height'] =this.props.height;
            }
            if(this.state.src == ""){
                return <img {...atr} className={this.props.className} src={this.props.src} onLoad={this.handleImageLoaded} onError={this.handleImageErrored}/>;
            }else{
                return <img {...atr} className={this.props.className} src={this.state.src} onLoad={this.handleImageLoaded} onError={this.handleImageErrored}/>;
            }
        }


    }
});

module.exports = Avatar;