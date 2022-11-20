<x-modal-confirm
    event-to-open-modal="custom-show-mark-post-as-not-spam-modal"
    event-to-close-modal="postWasMarkedAsNotSpam"
    modal-title="Reset Spam Counter"
    modal-description="Are you sure you want to mark this post as NOT spam? This will reset the spam counter to 0."
    modal-confirm-button-text="Reset Spam Counter"
    wire-click="markAsNotSpam"
/>
