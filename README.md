# test100990

CloudPress로 생성된 WordPress 사이트입니다.

## 사이트 정보
- **URL**: https://cp-ace27cbe-wp.choichoi3227.workers.dev
- **관리자**: https://cp-ace27cbe-wp.choichoi3227.workers.dev/wp-admin/ (ID: `admin`)
- **Worker 이름**: `cp-ace27cbe-wp`
- **Worker URL**: https://cp-ace27cbe-wp.choichoi3227.workers.dev
- **GitHub**: [choichoi3227-crypto/cp-ace27cbe-test100990](https://github.com/choichoi3227-crypto/cp-ace27cbe-test100990)

## 아키텍처
```
요청 → Cloudflare Worker (미러링) → PHP Runner (php-wasm) → WordPress
                ↕                            ↕
           KV 캐시                    GitHub 레포 (_db/wordpress.db)
```

## GitHub Actions
| 워크플로우 | 설명 |
|-----------|------|
| install-wordpress.yml | WordPress 설치 + SQLite DB 초기화 |
| deploy-worker.yml | Cloudflare Worker 재배포 |
| gh-pages-fallback.yml | 정적 캐시 갱신 (SEO 폴백) |
