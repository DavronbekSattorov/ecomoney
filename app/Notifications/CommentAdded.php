<?php

namespace App\Notifications;

use App\Models\Comment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CommentAdded extends Notification
{
    use Queueable;
    public $comment;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('AND Voting: A comment was posted on your post')
            ->markdown('emails.comment-added', [
                'comment' => $this->comment,
            ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'comment_id' => $this->comment->id,
            'comment_body' => html_entity_decode(strip_tags($this->comment->body)),
            'user_avatar' => $this->comment->user->getProfilePhotoUrlAttribute(),
            'user_name' => $this->comment->user->name,
            'post_id' => $this->comment->post->id,
            'post_slug' => $this->comment->post->slug,
            'post_title' => $this->comment->post->title,
        ];
    }
}
