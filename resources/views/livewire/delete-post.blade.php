<x-modal-confirm
    event-to-open-modal="custom-show-delete-modal"
    event-to-close-modal="postWasDeleted"
    modal-title="Delete Post"
    modal-description="Are you sure you want to delete this post? This action cannot be undone."
    modal-confirm-button-text="Delete"
    wire-click="deletePost"
/>
