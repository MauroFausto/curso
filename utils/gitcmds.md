# logout from git cmi

# Remove your SSH keys from ~/.ssh (or where you stored them).
rm -rf /home/user/.ssh

# Remove your user settings:

git config --global --unset user.name
git config --global --unset user.email
git config --global --unset credential.helper
git config --global --unset credential.helper

git config --global --unset remote.origin.url
git config --global --unset remote.origin.fetch
