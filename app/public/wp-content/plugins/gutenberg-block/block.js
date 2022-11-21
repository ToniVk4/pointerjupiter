wp.blocks.registerBlockType('pj/sub-title',{
    title: 'Subtitle box',
    icon: 'text',
    category: 'common',
    attributes: {
        content: {type:'string'},
        color:{type:'string'}
    },
 
    edit: function(props){
        function updateSubtitle(event){
            props.setAttributes({content: event.target.value})
        }
        return wp.element.createElement(
            "div",
            null, 
            wp.element.createElement(
                "h3", 
                null, 
                "Subtitle/description"), 
            wp.element.createElement(
                "input",
                    {
                type: "text",
                value: props.attributes.content,
                onChange: updateSubtitle,
          }));
    },
    save: function(props){
        wp.element.createElement(
            "div",
            null,
            wp.element.createElement(
                "h3", 
                null, 
                props.attributes.content
                ));
    }
})